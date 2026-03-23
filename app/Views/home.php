<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Maya - Chief Experience Architect specializing in Conversion Rate Optimization, UX Architecture, and Behavioral Design">
  <title>Maya | Chief Experience Architect</title>
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <style>
    /* Reset & Base */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      /* 60-30-10 Color System */
      --primary: #2563eb;       /* 60% - Blue (Trust) */
      --secondary: #64748b;     /* 30% - Slate (Neutral) */
      --accent: #10b981;        /* 10% - Green (Success/Action) */
      --bg: #ffffff;
      --text: #1e293b;
      --text-light: #64748b;
    }

    html {
      font-size: 16px; /* WCAG minimum */
      scroll-behavior: smooth;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      line-height: 1.5; /* ≥ 1.5 for readability */
      color: var(--text);
      background: var(--bg);
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    /* Typography */
    h1, h2, h3 {
      line-height: 1.2;
      font-weight: 700;
    }

    h1 { font-size: clamp(2rem, 5vw, 3rem); }
    h2 { font-size: clamp(1.5rem, 4vw, 2.25rem); margin-bottom: 1.5rem; }
    h3 { font-size: 1.25rem; margin-bottom: 1rem; }
    p { max-width: 65ch; margin-bottom: 1.5rem; } /* 45-75 chars for readability */
    a { color: var(--primary); text-decoration: none; border-bottom: 2px solid transparent; transition: border-color 0.2s; }
    a:hover { border-bottom-color: var(--primary); }

    /* Mobile Navigation Toggle */
    .menu-toggle {
      display: none; /* Hidden on desktop */
      flex-direction: column;
      justify-content: space-between;
      width: 30px;
      height: 24px;
      background: transparent;
      border: none;
      cursor: pointer;
      padding: 0;
      z-index: 101;
    }

    .menu-toggle span {
      display: block;
      width: 100%;
      height: 3px;
      background: var(--primary);
      border-radius: 2px;
      transition: transform 0.2s, opacity 0.2s;
    }

    /* Navigation */
    .nav {
      position: sticky;
      top: 0;
      background: rgba(255,255,255,0.95);
      backdrop-filter: blur(8px);
      padding: 0.75rem 0;
      z-index: 100;
      border-bottom: 1px solid #e2e8f0;
      margin-bottom: 2rem;
    }

    .nav-inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    .nav-logo {
      font-weight: 700;
      font-size: 1.25rem;
      color: var(--primary);
    }

    .nav-links {
      display: flex;
      gap: 2rem;
      list-style: none;
      flex-direction: row;
      align-items: center;
    }

    .nav-links a {
      font-size: 0.9rem;
      font-weight: 500;
      color: var(--text-light);
      border-bottom: none;
      white-space: nowrap;
    }

    .nav-links a:hover { color: var(--primary); }

    .nav-links.active {
      display: flex;
      flex-direction: column;
      position: absolute;
      top: 100%;
      left: 0;
      right: 0;
      background: rgba(255,255,255,0.98);
      backdrop-filter: blur(8px);
      padding: 1rem;
      border-bottom: 1px solid #e2e8f0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      gap: 0.5rem;
    }

    /* Buttons - Fitts's Law: 44x44 minimum touch target */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 44px;
      min-width: 44px;
      padding: 0.75rem 1.5rem;
      background: var(--primary);
      color: white;
      font-weight: 600;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      transition: transform 0.1s, background 0.2s;
      text-decoration: none;
    }

    .btn:hover {
      background: #1d4ed8;
      transform: translateY(-1px);
    }

    .btn:active {
      transform: translateY(0);
    }

    /* Mobile Responsive - Thumb-friendly zones */
    @media (max-width: 768px) {
      .nav {
        padding: 0.5rem 0;
      }

      .menu-toggle {
        display: flex;
      }

      .nav-links {
        display: none;
        width: 100%;
        padding: 1rem 0;
      }

      .nav-links.active {
        display: flex;
      }

      .nav-links li {
        width: 100%;
        text-align: center;
      }

      .nav-links a {
        display: block;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        border-radius: 8px;
      }

      .nav-links a:hover {
        background: #f1f5f9;
      }

      /* Adjust hero for mobile */
      .hero {
        padding: 3rem 1rem 4rem;
      }

      .hero-badge {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
      }

      .hero h1 {
        font-size: 2rem;
      }

      .hero .tagline {
        font-size: 1rem;
      }

      /* Stack stats on narrow screens */
      .stats {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        padding: 2rem 1rem;
      }

      .stat-value {
        font-size: 2rem;
      }

      /* Single column grids */
      .philosophy-grid,
      .specialization-list {
        grid-template-columns: 1fr;
      }

      .workflow-step {
        grid-template-columns: 1fr;
        gap: 1rem;
      }

      .step-number {
        width: 40px;
        height: 40px;
        font-size: 1rem;
      }

      /* Adjust buttons */
      .hero-cta {
        flex-direction: column;
        align-items: center;
      }

      .btn {
        width: 100%;
        max-width: 300px;
      }

      /* Reduce padding */
      .philosophy,
      .specializations,
      .workflow,
      #contact {
        padding: 2rem 1rem;
      }

      body {
        padding: 0 0.75rem;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="nav">
    <div class="nav-inner">
      <div class="nav-logo">Maya</div>
      <button class="menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <ul class="nav-links">
        <li><a href="#philosophy">Philosophy</a></li>
        <li><a href="#specializations">Expertise</a></li>
        <li><a href="#workflow">Process</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero: Immediate Value Proposition (<3s understanding) -->
  <section class="hero">
    <span class="hero-badge">Chief Experience Architect</span>
    <h1>Transforming digital experiences into conversion engines</h1>
    <p class="tagline">I shrink the gap between user mental models and system design—eliminating cognitive friction, boosting conversions, and building inclusive products everyone can use.</p>
    <div class="hero-cta">
      <a href="#workflow" class="btn">See My Process</a>
      <a href="#contact" class="btn" style="background: transparent; color: var(--primary); border: 2px solid var(--primary);">Get in Touch</a>
    </div>
  </section>

  <!-- Stats: Social Proof within view -->
  <section class="stats" aria-label="Key metrics">
    <div class="stat-item">
      <div class="stat-value">+47%</div>
      <div class="stat-label">Avg. Conversion Lift</div>
    </div>
    <div class="stat-item">
      <div class="stat-value">&lt;3s</div>
      <div class="stat-label">Load Time Target</div>
    </div>
    <div class="stat-item">
      <div class="stat-value">WCAG 2.2</div>
      <div class="stat-label">Accessibility Compliant</div>
    </div>
  </section>

  <!-- Philosophy Section -->
  <section id="philosophy" class="philosophy">
    <h2>Design Philosophy</h2>
    <div class="philosophy-grid">
      <article class="philosophy-card">
        <h3>Clarity First</h3>
        <p>Information architecture must be intuitive. Users should never wonder "where do I go?" Reduce cognitive load through progressive disclosure.</p>
      </article>
      <article class="philosophy-card">
        <h3>Efficiency Through Pattern Recognition</h3>
        <p>Jakob's Law: users prefer your site to work like others they know. Leverage established patterns to reduce learning curves.</p>
      </article>
      <article class="philosophy-card">
        <h3>Consistency Builds Trust</h3>
        <p>Visual and interaction consistency signals reliability. Establish design systems that scale.</p>
      </article>
      <article class="philosophy-card">
        <h3>Beauty with Purpose</h3>
        <p>Aesthetics drive emotion, but never at the cost of function. Use color psychology intentionally: Blue for trust, Red for urgency/CTA, Green for success.</p>
      </article>
    </div>
  </section>

  <!-- Specializations -->
  <section id="specializations" class="specializations">
    <h2>Areas of Expertise</h2>
    <p>Specialized in high-performance optimization that directly impacts business metrics.</p>
    <div class="specialization-list">
      <span class="specialization-tag">Conversion Rate Optimization (CRO)</span>
      <span class="specialization-tag">UX Architecture</span>
      <span class="specialization-tag">Behavioral Economics</span>
      <span class="specialization-tag">Accessibility (WCAG 2.1/2.2 AA)</span>
      <span class="specialization-tag">Psychology of Design</span>
      <span class="specialization-tag">Performance Optimization</span>
      <span class="specialization-tag">Responsive Systems</span>
    </div>
  </section>

  <!-- Workflow Section -->
  <section id="workflow" class="workflow">
    <h2>Optimization Methodology</h2>
    <p>A systematic 5-step approach to identify invisible revenue leaks and build toward the "A-ha" moment—where value is understood within 3 seconds.</p>

    <div class="workflow-steps">
      <article class="workflow-step">
        <div class="step-number"></div>
        <div class="step-content">
          <h3>Competitor Heuristic Mapping</h3>
          <p>Benchmark current flows against Jakob's Law and direct competitors. Identify parity gaps where user expectations aren't met.</p>
        </div>
      </article>

      <article class="workflow-step">
        <div class="step-number"></div>
        <div class="step-content">
          <h3>Technical Responsive Optimization</h3>
          <p>Enforce touch targets ≥ 44×44px (Apple) or 48×48px (Google) with 8px spacing. Ensure typography is ≥16px base, 1.5× line height, 45-75 character line length. Target load speed &lt;3s (aim for 1s).</p>
        </div>
      </article>

      <article class="workflow-step">
        <div class="step-number"></div>
        <div class="step-content">
          <h3>Chromotherapy & Behavioral Review</h3>
          <p>Apply 60-30-10 color rule. Validate psychological intent: Blue (Trust), Red (Urgency/CTA), Green (Success). Implement Hick's Law (reduce choice density) and Fitts's Law (thumb-friendly zones).</p>
        </div>
      </article>

      <article class="workflow-step">
        <div class="step-number"></div>
        <div class="step-content">
          <h3>Scenario Generation & Filtering</h3>
          <p>Develop 3 paths: Conversion-First, Accessibility-First, Performance-First. Score via ICE (Impact × Confidence × Ease) to select the optimal strategy.</p>
        </div>
      </article>

      <article class="workflow-step">
        <div class="step-number"></div>
        <div class="step-content">
          <h3>Final Synthesis Report</h3>
          <p>Deliver comprehensive JSON report: Executive Summary, Gap Analysis (Critical/Major/Minor), Visual/Structural Recommendations, Strategic Evolution Roadmap.</p>
        </div>
      </article>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" style="padding: 4rem 1rem; text-align: center;">
    <h2>Ready to optimize?</h2>
    <p style="max-width: 50ch; margin: 0 auto 2rem;">Let's identify your invisible revenue leaks and build experiences that convert.</p>
    <a href="mailto:hello@example.com" class="btn">Start a Conversation</a>
  </section>

  <!-- Footer -->
  <footer>
    <p>© <span id="year"></span> Maya | Chief Experience Architect</p>
    <p style="margin-top: 0.5rem;">Built with clarity, speed, and accessibility in mind. WCAG 2.2 AA compliant.</p>
    <p style="margin-top: 0.5rem; font-size: 0.8rem;">
      <a href="https://github.com/nehemiaobati/Maya" target="_blank" rel="noopener" style="color: var(--primary);">
        View this project on GitHub
      </a>
    </p>
  </footer>

  <script>
    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle && navLinks) {
      menuToggle.addEventListener('click', () => {
        const isActive = navLinks.classList.toggle('active');
        menuToggle.setAttribute('aria-expanded', isActive);
      });

      // Close menu when clicking a link
      navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          navLinks.classList.remove('active');
          menuToggle.setAttribute('aria-expanded', 'false');
        });
      });
    }

    // Close menu on outside click
    document.addEventListener('click', (e) => {
      if (navLinks && menuToggle && 
          navLinks.classList.contains('active') &&
          !navLinks.contains(e.target) &&
          !menuToggle.contains(e.target)) {
        navLinks.classList.remove('active');
        menuToggle.setAttribute('aria-expanded', 'false');
      }
    });

    // Simple year update
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
