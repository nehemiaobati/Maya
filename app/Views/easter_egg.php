<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>✨ You found it!</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Courier New', monospace;
      background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
      color: #00ff88;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      position: relative;
    }
    .container {
      text-align: center;
      max-width: 800px;
      animation: fadeIn 1s ease-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    h1 {
      font-size: clamp(2rem, 5vw, 4rem);
      margin-bottom: 1rem;
      text-shadow: 0 0 20px rgba(0,255,136,0.5);
    }
    .subtitle {
      font-size: 1.2rem;
      color: #00cc66;
      margin-bottom: 2rem;
      opacity: 0.8;
    }
    .ascii-art {
      font-size: 0.6rem;
      line-height: 1.2;
      color: #00ff88;
      margin: 2rem auto;
      white-space: pre;
      overflow-x: auto;
      max-width: 100%;
    }
    .message {
      background: rgba(0,255,136,0.1);
      border: 1px solid rgba(0,255,136,0.3);
      border-radius: 12px;
      padding: 1.5rem;
      margin-top: 2rem;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }
    .message p {
      margin-bottom: 0.5rem;
      line-height: 1.6;
    }
    .heart {
      display: inline-block;
      color: #ff6b6b;
      animation: pulse 1.5s infinite;
    }
    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.2); }
    }
    .stars {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      overflow: hidden;
      z-index: 0;
    }
    .star {
      position: absolute;
      width: 2px;
      height: 2px;
      background: white;
      border-radius: 50%;
      animation: twinkle 2s infinite;
    }
    @keyframes twinkle {
      0%, 100% { opacity: 0.3; }
      50% { opacity: 1; }
    }
    .hint {
      margin-top: 2rem;
      font-size: 0.8rem;
      color: #666;
      opacity: 0.6;
    }
    .back-link {
      display: inline-block;
      margin-top: 1.5rem;
      padding: 0.75rem 1.5rem;
      background: rgba(0,255,136,0.2);
      color: #00ff88;
      text-decoration: none;
      border-radius: 8px;
      border: 1px solid rgba(0,255,136,0.4);
      transition: all 0.2s;
    }
    .back-link:hover {
      background: rgba(0,255,136,0.3);
      transform: translateY(-2px);
    }
  </style>
</head>
<body>
  <div class="stars" id="stars"></div>

  <div class="container">
    <h1>🌟 Secret Discovered! 🌟</h1>
    <p class="subtitle">You found the hidden corner of Maya's world</p>

    <div class="ascii-art">
      _____ _              _  _____           _       _   
     / ____| |            | |/ ____|         | |     | |  
    | (___ | | _ __   ___ | | (___   ___  ___| |_   _| |_ 
     \___ \| | '_ \ / _ \| |\___ \ / _ \/ __| | | | | __|
     ____) | | | | | (_) | |____) |  __/ (__| | |_| | |_ 
    |_____/|_|_| |_|\___/|_|_____/ \___|\___|_|\__,_|\__|
    </div>

    <div class="message">
      <p>🥚 <strong>Easter Egg Unlocked!</strong> 🥚</p>
      <p>You're not just browsing—you're exploring. I like that.</p>
      <p>This little hideaway is where I stash fun surprises, hidden messages, and occasional inside jokes.</p>
      <p>If you found this, you're either incredibly curious or just really good at guessing URLs. Either way—nice work! <span class="heart">♥</span></p>
      <p style="margin-top: 1rem; font-size: 0.9em; opacity: 0.7;">
        — Maya 💻🌸
      </p>
    </div>

    <a href="/" class="back-link">← Back to the main site</a>

    <p class="hint">(P.S. There might be more hidden around... 👀)</p>
  </div>

  <script>
    // Generate random stars
    const starsContainer = document.getElementById('stars');
    for (let i = 0; i < 100; i++) {
      const star = document.createElement('div');
      star.className = 'star';
      star.style.left = Math.random() * 100 + '%';
      star.style.top = Math.random() * 100 + '%';
      star.style.animationDelay = Math.random() * 2 + 's';
      starsContainer.appendChild(star);
    }
  </script>
</body>
</html>
