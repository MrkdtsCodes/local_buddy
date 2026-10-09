<?php
$question = $argv[1] ?? "how do I check my ip";

// words in the question, lowercase
$qWords = preg_split('/[^a-z0-9]+/', strtolower($question), -1, PREG_SPLIT_NO_EMPTY);

$text  = file_get_contents(__DIR__ . '/references/knowledge.md');
$cards = explode('---', $text);

$best = ['title' => '', 'command' => '', 'score' => 0];

foreach ($cards as $card) {
    $card = trim($card);
    if ($card === '') continue;

    preg_match('/^#\s*(.+)$/m', $card, $t);
    preg_match('/^command:\s*(.+)$/m', $card, $c);
    preg_match('/^keywords:\s*(.+)$/m', $card, $k);

    $score = 0;
    foreach (explode(',', $k[1] ?? '') as $kw) {
        $words = preg_split('/[^a-z0-9]+/', strtolower($kw), -1, PREG_SPLIT_NO_EMPTY);
        if (!$words) continue;

        // the keyword counts only if ALL its words are in the question
        if (count(array_diff($words, $qWords)) === 0) {
            $score += count($words);
        }
    }

    if ($score > $best['score']) {
        $best = ['title' => $t[1] ?? '?', 'command' => $c[1] ?? '?', 'score' => $score];
    }
}

$threshold = 2;
if ($best['score'] >= $threshold) {
    echo "MATCH: {$best['title']} => {$best['command']} (score {$best['score']})\n";
} else {
    echo "NO MATCH (best score {$best['score']}) -> would ask the model\n";
}