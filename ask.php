<?php
header('Content-Type: application/json');

$question = trim($_POST['question'] ?? '');
if ($question === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Empty question']);
    exit;
}

set_time_limit(300);

function words($s) {
    $s = strtolower($s);
    $s = preg_replace('/(?<=[a-z])-(?=[a-z])/', '', $s);
    $w = preg_split('/[^a-z0-9]+/', $s, -1, PREG_SPLIT_NO_EMPTY);

    $same = ['control' => 'ctrl', 'cntrl' => 'ctrl', 'ctl' => 'ctrl'];
    return array_map(fn($x) => $same[$x] ?? $x, $w);
}

function findCard($question) {
    $path = __DIR__ . '/references/knowledge.md';
    if (!file_exists($path)) return null;

    $qWords = words($question);
    $best = null;
    $bestScore = 0;

    foreach (explode('---', file_get_contents($path)) as $card) {
        $card = trim($card);
        if ($card === '') continue;

        preg_match('/^command:\s*(.+)$/m', $card, $c);
        preg_match('/^explains:\s*(.+)$/m', $card, $e);
        preg_match('/^danger:\s*(.+)$/m', $card, $d);
        preg_match('/^keywords:\s*(.+)$/m', $card, $k);

        $score = 0;
        foreach (explode(',', $k[1] ?? '') as $kw) {
            $kwWords = words($kw);
            if ($kwWords && count(array_diff($kwWords, $qWords)) === 0) {
                $score += count($kwWords);
                if ($kwWords === $qWords) $score += 2;   // question is exactly this keyword
            }
        }

        if ($score > $bestScore) {
            $bestScore = $score;
            $best = [
                'command'     => trim($c[1] ?? ''),
                'explanation' => trim($e[1] ?? ''),
                'dangerous'   => strtolower(trim($d[1] ?? 'no')) === 'yes',
                'source'      => 'card'
            ];
        }
    }
    return $bestScore >= 2 ? $best : null;
}

$card = findCard($question);
if ($card) {
    echo json_encode($card);
    exit;
}

// ---- Cache: if the AI already answered this exact question, reuse it ----
$cacheFile = __DIR__ . '/cache.json';
$cache = file_exists($cacheFile) ? (json_decode(file_get_contents($cacheFile), true) ?: []) : [];
$key = md5(strtolower($question));

if (isset($cache[$key])) {
    $hit = $cache[$key];
    $hit['cached'] = true;
    echo json_encode($hit);
    exit;
}

// ---- AI fallback (Linux Mint / Ubuntu only) ----
$body = [
    "model"      => "qwen2.5-coder:1.5b",
    "stream"     => false,
    "keep_alive" => "30m",
    "messages"   => [
        ["role" => "system", "content" => "You are a Linux helper for beginners on Linux Mint (Ubuntu-based). Use apt for software, never yum, dnf or pacman. Reply with exactly two lines: the command, then one short sentence. Nothing else."],
        ["role" => "user", "content" => "how do I check disk space"],
        ["role" => "assistant", "content" => "df -h\nShows free and used space on each disk."],
        ["role" => "user", "content" => "how do I install vlc"],
        ["role" => "assistant", "content" => "sudo apt install vlc\nInstalls the VLC media player."],
        ["role" => "user", "content" => $question]
    ],
    "options"    => [
        "temperature" => 0,
        "num_predict" => 50,
        "num_ctx"     => 512
    ]
];

$ch = curl_init('http://127.0.0.1:11434/api/chat');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_TIMEOUT, 300);

$response = curl_exec($ch);

if ($response === false) {
    http_response_code(502);
    echo json_encode(['error' => curl_error($ch)]);
    curl_close($ch);
    exit;
}

$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($status < 200 || $status >= 300) {
    http_response_code(502);
    echo json_encode(['error' => 'Ollama request failed']);
    exit;
}

$result = json_decode($response, true);
$answer = trim($result['message']['content'] ?? '');

// ---- Clean the answer: find the first line that is a real command ----
$answer = str_replace('`', '', $answer);
$lines = array_values(array_filter(
    array_map('trim', preg_split('/\R/', $answer)),
    fn($l) => $l !== '' && !in_array(strtolower($l), ['bash', 'sh', 'shell'])
));

// Package managers from other distros: never show these on Mint / Ubuntu
$otherDistros = '/\b(yum|dnf|pacman|zypper|apk|emerge|rpm|brew)\b/i';

$command = '';
$explanation = '';
foreach ($lines as $i => $line) {
    $cand = preg_replace('/^(Command:|\$)\s*/i', '', $line);
    $fw = strtok($cand, ' ');
    // skip sentences: they start with a capital letter or end with . or :
    if ($fw === false || !preg_match('/^[a-z.\/]/', $cand) || preg_match('/[A-Za-z0-9][.:]$/', $cand)) continue;
    // skip commands from other distros (also catches "sudo dnf ...")
    if (preg_match($otherDistros, $cand)) continue;
    if (trim((string) shell_exec('command -v ' . escapeshellarg($fw) . ' 2>/dev/null')) !== '') {
        $command = $cand;
        $explanation = mb_substr(preg_replace('/^Explanation:\s*/i', '', $lines[$i + 1] ?? ''), 0, 120);
        break;
    }
}

if ($command === '') {
    echo json_encode([
        'command'     => '',
        'explanation' => "I couldn't find a command for that. Try asking in other words.",
        'dangerous'   => false,
        'source'      => 'none',
        'raw'         => $answer   // debug only: delete this line when everything works
    ]);
    exit;
}

$firstWord = strtok($command, ' ');
if ($explanation === '') {
    $explanation = 'AI suggestion. Run "man ' . $firstWord . '" to learn what it does.';
}

// ---- Danger check (done in code, not by the model) ----
$dangerPatterns = [
    '/rm\s+(-\w*\s+)*-\w*[rf]/i',
    '/\bmkfs/i',
    '/\bdd\s+if=/i',
    '/chmod\s+-R\s+777/i',
    '/>\s*\/dev\/sd/i',
    '/:\(\)\s*\{/',
    '/\bsudo\s+rm\b/i',
    '/\bapt(-get)?\s+(remove|purge|autoremove)\b/i',   // removing software
];

$dangerous = false;
foreach ($dangerPatterns as $p) {
    if (preg_match($p, $command)) {
        $dangerous = true;
        break;
    }
}

$final = [
    'command'     => $command,
    'explanation' => $explanation,
    'dangerous'   => $dangerous,
    'source'      => 'ai'
];

$cache[$key] = $final;
file_put_contents($cacheFile, json_encode($cache), LOCK_EX);

echo json_encode($final);