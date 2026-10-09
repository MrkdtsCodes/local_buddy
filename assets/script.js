
const $ = id => document.getElementById(id);

async function ask() {
  const q = $('question').value.trim();
  if (!q) return;

  $('status').textContent = 'Thinking...';
  $('command').hidden = true;
  $('command').textContent = '';
  $('command').classList.remove('danger', 'plain');
  $('explanation').textContent = '';
  $('label').textContent = '';
  $('label').className = '';
  $('copyBtn').hidden = true;
  $('warning').hidden = true;

  try {
    const res = await fetch('ask.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: new URLSearchParams({ question: q })
    });
    const data = await res.json();
    console.log(data);   // see the full answer in the console
    $('status').textContent = '';

    if (data.error) {
      $('explanation').textContent = 'Error: ' + data.error;
      return;
    }

    $('explanation').textContent = data.explanation || '';

    if (data.source === 'none' || !data.command) {
      // no usable command: show whatever the AI said instead
      if (data.raw) {
        $('explanation').textContent = 'No verified command found. This is what the AI said.';
        $('command').textContent = data.raw;
        $('command').classList.add('plain');
        $('command').hidden = false;
        $('copyBtn').hidden = false;
        $('label').textContent = 'AI answer, not a command';
        $('label').className = 'ai';
      }
      return;
    }

    $('command').textContent = data.command;
    $('command').hidden = false;
    $('command').classList.toggle('danger', !!data.dangerous);
    $('copyBtn').hidden = false;
    $('warning').hidden = !data.dangerous;

    if (data.source === 'card') {
      $('label').textContent = 'verified command';
      $('label').className = 'verified';
    } else {
      $('label').textContent = 'AI suggestion, double-check';
      $('label').className = 'ai';
    }
  } catch (e) {
    console.error('Error:', e);
    $('status').textContent = '';
    $('explanation').textContent = 'Could not reach the server.';
  }
}

$('askBtn').addEventListener('click', ask);
$('question').addEventListener('keydown', e => { if (e.key === 'Enter') ask(); });
document.querySelectorAll('.chip').forEach(b => {
  b.addEventListener('click', () => { $('question').value = b.dataset.q; ask(); });
});
$('copyBtn').addEventListener('click', () => {
  navigator.clipboard.writeText($('command').textContent);
  $('copyBtn').textContent = 'copied!';
  setTimeout(() => $('copyBtn').textContent = 'copy', 1500);
});
