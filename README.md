# LocalBuddy: an offline Linux command helper

If you have a potato laptop and you're new to Linux, this is for you.

Type what you want to do in plain words ("how do I check disk space?") and get the Linux command back. Everything runs on your own laptop. No internet, no account, no cloud API, no cost.

Built for a hackathon with the theme **AI running locally**.

## Why this exists

Beginners forget Linux commands all the time, and many of them are on old, low-spec laptops with unreliable internet. Cloud AI tools need internet, an account, and send your commands to someone else's server. LocalBuddy runs a small AI model on the same laptop as the page, so it works with Wi-Fi turned off and nothing leaves the machine.

It was built and tested on a **Lenovo IdeaPad S145 with an Intel Celeron N4100, about 8 GB RAM, no GPU, and a CPU without AVX**. If it runs there, it should run on most machines.

## How it works

```
index.html (jQuery $.ajax)  ->  ask.php  ->  Ollama (local AI)
index.html (shows answer)   <-  ask.php  <-  Ollama
```

1. The user types a question in the page.
2. The page sends only the question to `ask.php` with an AJAX POST.
3. `ask.php` reads `$_POST['question']`, trims it, and builds the request for Ollama (model, system instruction, prompt, options).
4. `ask.php` sends that request to Ollama's local address with cURL.
5. Ollama replies with JSON. `ask.php` takes the `response` field and echoes it.
6. The page shows the answer.

The page never talks to Ollama directly. Keeping PHP in the middle is what makes it possible to add the safety check and the verified command list.

## Tech stack

- **Frontend:** HTML, CSS, JavaScript, jQuery (`$.ajax`)
- **Backend:** vanilla PHP with cURL
- **AI:** [Ollama](https://ollama.com) running `qwen2.5:0.5b` locally
- **Planned storage:** a PHP array or SQLite for the verified command list

## Setup

### 1. Install Ollama (Linux)

```bash
curl -fsSL https://ollama.com/install.sh | sh
```

Check that it is running by opening `http://localhost:11434`. It should say "Ollama is running". A "No GPU detected" warning is normal and only means it will run on the CPU.

### 2. Download the model (needs internet once)

```bash
ollama pull qwen2.5:0.5b
```

After this download, the project works fully offline.

### 3. Run the project

From the project folder:

```bash
php -S localhost:8000
```

Then open `http://localhost:8000/index.html` in your browser. Do not open the HTML file by double-clicking it, because the AJAX request to `ask.php` will not work from a `file://` address.

### 4. Test the backend on its own

```bash
curl -d "question=how do I check disk space?" http://localhost:8000/ask.php
```

## Project files

```
localbuddy/
  index.html    the page: input, button, answer area, AJAX
  ask.php       receives the question, calls Ollama, returns the answer
  README.md     this file
```

## Making a slow laptop usable

On a CPU without AVX, the model is slow unless the request is kept small. These are the measured results with the same question ("how do I check disk space?") on the machine above:

| Setup | Time | Result |
|---|---|---|
| `ollama run` with no system prompt | 69 s, and over 3.5 min on another run | Rambling, wrong answers (Windows steps, made-up commands) |
| API request with a short system prompt, `temperature: 0.1`, `num_predict: 60` | 11.4 s | Correct: `df -h` |

What helped:

- **A short system prompt.** Reading the prompt took about 7.9 s of the 11.4 s, so a shorter prompt is the biggest speed gain.
- **`num_predict`.** It stops the model after a set number of tokens, so it cannot ramble for minutes.
- **A low `temperature`.** Answers stay consistent and on topic.
- **A small model.** `qwen2.5:0.5b` is much faster than larger ones on this CPU.
- **`keep_alive`.** Keeps the model loaded between questions, since the first request after an unload is slower.

## Known limits (honest version)

- A 0.5B model sometimes invents commands or flags. AI output should never be treated as verified, and the page should say so.
- The first answer after the model unloads is slower, because the model has to load again.
- It is built for short, common Linux questions, not long conversations. Each question stands on its own.

## Status

Done:

- Ollama installed and tested on the target laptop
- Request settings tuned for speed and short answers
- Page sends the question to `ask.php` with AJAX and PHP receives it

In progress:

- cURL call from `ask.php` to Ollama and returning the `response` field
- "Thinking..." message and answer area on the page
- Rejecting empty questions before calling Ollama

Planned, in this order:

1. **Danger check.** Scan commands for risky words (`rm -rf`, `dd`, `chmod 777`, `sudo`) and show a red warning.
2. **Verified command list.** 30 to 50 checked commands matched by keywords before the AI is called, so common answers are instant and correct. The AI becomes the fallback and its answers are labeled "AI-generated, check before running".
3. **Offline badge and copy button.**
4. **Extras if time allows:** error rescue (paste an error, get a plain explanation), a saved cheat sheet with SQLite, and streaming the answer word by word.

An optional cloud AI fallback may be added last, off by default and clearly labeled. The core always runs locally.

## Demo script

1. Show the page and say who it is for: a beginner on a potato laptop.
2. Turn off Wi-Fi.
3. Ask a question and show the command appear.
4. Ask a risky question and show the warning (once the danger check is built).
5. Mention the hardware it runs on.

Tip: send one warm-up question a few minutes before presenting so the model is already loaded.

## License and credits

Models are downloaded from the Ollama library. Check the license on each model's page before reusing it outside the hackathon.
