<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/style.css">
<title>LocalBuddy</title>

</head>
<body>
  <div class="wrap">
    <header class="top">
      <span class="logo"><b>&gt;_</b> localbuddy</span>
      <span class="pill">runs on this computer</span>
    </header>

    <p class="motd">Say what you want to do in plain words, then press Enter.</p>

    <div class="row">
      <span class="seg user">you</span>
      <span class="seg dir">~</span>
      <span class="arrow">&#10095;</span>
      <input id="question" type="text" placeholder="how do I check my disk space?" autocomplete="off" spellcheck="false" autofocus>
      <button id="askBtn">Ask</button>
    </div>

    <div class="chips">
      <button class="chip" data-q="check disk space">disk space</button>
      <button class="chip" data-q="check my ip address">my ip</button>
      <button class="chip" data-q="list files in a folder">list files</button>
      <button class="chip" data-q="copy a file">copy a file</button>
    </div>

    <p id="status"></p>

    <div id="result">
      <code id="command" hidden></code>
      <div class="meta">
        <span id="label"></span>
        <button id="copyBtn" hidden>copy</button>
      </div>
      <p id="explanation"></p>
      <div id="warning" hidden>&#9888; Dangerous command. Double-check before running it!</div>
    </div>
  </div>
  <script src="assets/jquery.min.js"></script>
  <script src="assets/script.js"></script>
</body>

</html>
