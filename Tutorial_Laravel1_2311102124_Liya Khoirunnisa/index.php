<!-- Liya Khoirunnisa - 2311102124 - IF1103 -->

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Liya Khoirunnisa — Web Developer Portfolio" />
  <title>Liya Khoirunnisa | Web Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

  <!-- LOADER -->
  <div id="loader">
    <div class="ld-logo">Welcome to Liya Khoirunnisa's Portfolio</div>
    <div class="ld-bar">
      <div class="ld-fill"></div>
    </div>
  </div>

  <!-- ═══ NAVBAR ═══ -->
  <nav id="navbar">
    <a href="#home" class="nav-logo">Liya Khoirunnisa <span class="nav-logo-dot"></span></a>
    <ul class="nav-links">
      <li><a href="#home" class="nav-link active">Home</a></li>
      <li><a href="#about" class="nav-link">About</a></li>
      <li><a href="#skills" class="nav-link">Skills</a></li>
      <li><a href="#projects" class="nav-link">Project</a></li>
      <li><a href="#contact" class="nav-link nav-btn">Contact</a></li>
    </ul>
    <button class="hamburger" aria-label="Menu"><span></span><span></span><span></span></button>
  </nav>

  <!-- ═══════════════════════════════════
     1. HERO / DASHBOARD
═══════════════════════════════════ -->
  <section id="home">
    <div class="hero-wrap">

      <!-- LEFT -->
      <div class="hero-left">

        <!-- Social icons -->
        <div class="hero-socials rv" data-delay="100">
          <!-- Instagram -->
          <a href="https://www.instagram.com/lykhrnnsa?igsh=dDBhYXpobGhzNmJh" target="_blank" title="Instagram">
            <svg viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
            </svg>
          </a>
          <!-- TikTok -->
          <a href="https://www.tiktok.com/@nissaluv_?_r=1&_t=ZS-94lYDGSAdmR" target="_blank" title="TikTok">
            <svg viewBox="0 0 24 24">
              <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
            </svg>
          </a>
          <!-- LinkedIn -->
          <a href="https://www.linkedin.com/in/liya-khoirunnisa" target="_blank" title="LinkedIn">
            <svg viewBox="0 0 24 24">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
            </svg>
          </a>
          <!-- GitHub -->
          <a href="https://github.com/liyakhoirunnisa" target="_blank" title="GitHub">
            <svg viewBox="0 0 24 24">
              <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
            </svg>
          </a>
        </div>

        <div class="hero-greeting rv" data-delay="150">
          <span class="wave">👋</span> Hello, welcome!
        </div>

        <h1 class="hero-name rv" data-delay="200">
          Hi, I'm<br /><em>Liya Khoirunnisa</em>
        </h1>

        <div class="hero-role rv" data-delay="280">
          <span class="hero-role-pill">Web Developer</span>
          <span class="hero-typed-row">— <span id="hero-typed">Frontend Dev</span></span>
        </div>

        <p class="hero-desc rv" data-delay="340">
          Passionate about building beautiful, functional, and user-centered web experiences. Ready to transform your ideas into extraordinary digital realities.
        </p>

        <div class="hero-btns rv" data-delay="420">
          <a href="#" class="btn-main" download>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4" />
              <polyline points="7 10 12 15 17 10" />
              <line x1="12" y1="15" x2="12" y2="3" />
            </svg>
            <span>Download CV</span>
          </a>
          <a href="#contact" class="btn-outline">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline points="22,6 12,13 2,6" />
            </svg>
            <span>Contact Me</span>
          </a>
        </div>


      </div>

      <!-- RIGHT: Illustration -->
      <div class="hero-right rv-r" data-delay="300">
        <div class="hero-illus">
          <div class="h-blob"></div>
          <div class="h-photo">
            <img src="assets/img/Nisaa.jpeg" alt="Liya Khoirunnisa" onerror="this.style.display='none'" />
          </div>
          <div class="h-ring"></div>
          <div class="h-hi-badge">Hi!</div>

          <!-- Floating skill badges -->
          <div class="tb tb-1">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="Laravel" />
            Laravel
          </div>
          <div class="tb tb-2">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original.svg" alt="Vue" />
            Vue.js
          </div>
          <div class="tb tb-3">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/go/go-original.svg" alt="Go" />
            Golang
          </div>
          <div class="tb tb-4">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg" alt="Figma" />
            Figma
          </div>
        </div>
      </div>

    </div>
  </section>

  <hr class="section-divider" />

  <!-- ═══════════════════════════════════
     2. ABOUT ME
═══════════════════════════════════ -->
  <section id="about" class="section-pad">
    <div style="max-width:1160px; margin:0 auto;">
      <div class="about-inner">

        <!-- Left: image -->
        <div class="about-left rv-l">
          <div class="about-img">
            <img src="assets/img/Nisaa.jpeg" alt="About Liya" onerror="this.style.display='none'" />
          </div>
        </div>

        <!-- Right: text -->
        <div class="about-right rv-r">
          <span class="sec-label">About Me</span>
          <h2 class="sec-title">Get to Know<br />Me Better</h2>

          <p>I am Nisa, a sixth-semester Informatics Engineering student at Telkom University Purwokerto. My primary focus is on building web experiences that are functional, aesthetically pleasing, and fully centered on user needs.</p>
          <p>As a Web Developer, I specialize in the Laravel and Vue.js ecosystem to create responsive, high-performance applications. I place strong emphasis on MySQL database efficiency and clean, maintainable code practices.</p>
          <p>I also integrate my interest in Artificial Intelligence and intelligent systems to develop smarter digital solutions. With a problem-solving mindset, I am committed to transforming complex ideas into impactful digital realities.</p>

          <a href="#contact" class="btn-main" style="display:inline-flex;margin-top:8px;">
            <span>Learn More</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <hr class="section-divider" />

  <!-- ═══════════════════════════════════
     3. MY SKILLS
═══════════════════════════════════ -->
  <section id="skills" class="section-pad">
    <div style="max-width:1160px; margin:0 auto;">
      <div class="skills-head">
        <span class="sec-label rv">My Skills</span>
        <h2 class="sec-title rv" data-delay="80">Tech Stack & Tools</h2>
        <p class="sec-sub rv" data-delay="140">Technologies and tools I use to make amazing experiences</p>
      </div>

      <div class="skills-grid">

        <!-- Laravel -->
        <div class="sk-card rv" data-delay="280">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(255,45,32,.07)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="Laravel" />
            </div>
            <span class="sk-name">Laravel PHP</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">90%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="90%"></div>
          </div>
        </div>

        <!-- MySQL -->
        <div class="sk-card rv" data-delay="330">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(0,117,143,.1)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" alt="MySQL" />
            </div>
            <span class="sk-name">MySQL</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">89%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="89%"></div>
          </div>
        </div>

        <!-- C++ -->
        <div class="sk-card rv" data-delay="130">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(0,90,160,.08)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/cplusplus/cplusplus-original.svg" alt="C++" />
            </div>
            <span class="sk-name">C++</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">88%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="88%"></div>
          </div>
        </div>

        <!-- Golang -->
        <div class="sk-card rv" data-delay="180">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(0,172,215,.1)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/go/go-original.svg" alt="Golang" />
            </div>
            <span class="sk-name">Golang</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">87%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="87%"></div>
          </div>
        </div>

        <!-- Figma -->
        <div class="sk-card rv" data-delay="80">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(160,100,240,.1)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg" alt="Figma" />
            </div>
            <span class="sk-name">Figma</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">87%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="87%"></div>
          </div>
        </div>

        <!-- Vue.js -->
        <div class="sk-card rv" data-delay="380">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(65,184,131,.1)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original.svg" alt="Vue.js" />
            </div>
            <span class="sk-name">Vue.js</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">86%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="86%"></div>
          </div>
        </div>

        <!-- Python -->
        <div class="sk-card rv" data-delay="230">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(55,118,171,.1)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg" alt="Python" />
            </div>
            <span class="sk-name">Python</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">85%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="85%"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr class="section-divider" />

  <!-- ═══════════════════════════════════
     4. MY SERVICE
═══════════════════════════════════ -->
  <section id="services" class="section-pad">
    <div style="max-width:1160px; margin:0 auto;">
      <span class="sec-label rv">My Service</span>
      <h2 class="sec-title rv" data-delay="80">What Can I Do for You?</h2>
      <p class="sec-sub rv" data-delay="140" style="margin-bottom:52px;">I offer comprehensive web development services from UI to reliable backend system.</p>

      <div class="svc-grid">
        <!-- Frontend -->
        <div class="svc-card rv" data-delay="100">
          <div class="svc-img">
            <img src="assets/img/frontend.png" alt="Frontend Development" />
            <div class="svc-img-ov"></div>
            <span class="svc-badge">Frontend</span>
          </div>
          <div class="svc-body">
            <div class="svc-icon-row">
              <div class="svc-ico">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polyline points="16 18 22 12 16 6" />
                  <polyline points="8 6 2 12 8 18" />
                </svg>
              </div>
              <h3 class="svc-title">Frontend Development</h3>
            </div>
            <p class="svc-desc">Build a responsive, interactive and visually appealing interface using recent technology to ensure optimal performance on all devices.</p>
            <div class="svc-tags">
              <span class="svc-tag">HTML5 / CSS3</span>
              <span class="svc-tag">JavaScript</span>
              <span class="svc-tag">Vue.js</span>
              <span class="svc-tag">Figma</span>
            </div>
          </div>
        </div>

        <!-- Backend -->
        <div class="svc-card rv" data-delay="200">
          <div class="svc-img">
            <img src="assets/img/backend.png" alt="Backend Development" />
            <div class="svc-img-ov"></div>
            <span class="svc-badge purple">Backend</span>
          </div>
          <div class="svc-body">
            <div class="svc-icon-row">
              <div class="svc-ico purple">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="2" y="2" width="20" height="8" rx="2" />
                  <rect x="2" y="14" width="20" height="8" rx="2" />
                  <line x1="6" y1="6" x2="6.01" y2="6" />
                  <line x1="6" y1="18" x2="6.01" y2="18" />
                </svg>
              </div>
              <h3 class="svc-title">Backend Development</h3>
            </div>
            <p class="svc-desc">Building a powerful, scaleable, and secure backend system. Designing REST API, managing the database, and implementing efficient business logic.</p>
            <div class="svc-tags">
              <span class="svc-tag p">PHP / Laravel</span>
              <span class="svc-tag p">MySQL</span>
              <span class="svc-tag p">REST API</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr class="section-divider" />

  <!-- ═══════════════════════════════════
     5. MY PROJECTS
═══════════════════════════════════ -->
  <section id="projects" class="section-pad">
    <div style="max-width:1160px; margin:0 auto;">
      <div class="proj-header">
        <div>
          <span class="sec-label rv">My Projects</span>
          <h2 class="sec-title rv" data-delay="80">Featured Works & Projects</h2>
          <p class="sec-sub rv" data-delay="140" style="margin-bottom:0">A collection of my featured projects and digital experiences.</p>
        </div>
      </div>

      <div class="proj-grid">

        <!-- Project 1 -->
        <div class="proj-card rv" data-delay="80">
          <div class="proj-img-wrap">
            <img src="assets/img/barbekuy.png" alt="Website Barbekuy" />
            <div class="proj-n">01</div>
          </div>
          <div class="proj-body">
            <div class="proj-cat">Website</div>
            <h3 class="proj-title">Website Barbekuy</h3>
            <p class="proj-desc">Barbekuy is a Purwokerto-based grill equipment rental platform featuring a dual-role system: an Admin panel for managing stock, transactions, and sales statistics, alongside a Customer interface for seamless rentals, integrated Midtrans payments, and product reviews.</p>
            <div class="proj-stack">
              <span class="proj-tag">Laravel</span>
              <span class="proj-tag">MySQL</span>
            </div>
            <div class="proj-btns">
              <a href="https://github.com/liyakhoirunnisa/Barbekuy-IF1102-.git" target="_blank" class="proj-btn proj-btn-show">
                <svg viewBox="0 0 24 24">
                  <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6" />
                  <polyline points="15 3 21 3 21 9" />
                  <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
                Show
              </a>
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="proj-card rv" data-delay="160">
          <div class="proj-img-wrap">
            <img src="assets/img/portofolio.png" alt="Simple Portofolio Website" />
            <div class="proj-n">02</div>
          </div>
          <div class="proj-body">
            <div class="proj-cat">Website</div>
            <h3 class="proj-title">Simple Portofolio Website</h3>
            <p class="proj-desc">This personal portfolio website is built with HTML, CSS, JS, and PHP featuring an About Me profile, a Project gallery, and a functional Contact Me messaging system.</p>
            <div class="proj-stack">
              <span class="proj-tag">HTML</span>
              <span class="proj-tag">CSS</span>
              <span class="proj-tag">Bootstrap</span>
            </div>
            <div class="proj-btns">
              <a href="https://github.com/liyakhoirunnisa/simple_portofolio_web.git" target="_blank" class="proj-btn proj-btn-show">
                <svg viewBox="0 0 24 24">
                  <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6" />
                  <polyline points="15 3 21 3 21 9" />
                  <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
                Show
              </a>
            </div>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="proj-card rv" data-delay="240">
          <div class="proj-img-wrap">
            <img src="assets/img/calculator.png" alt="Calculator Program" />
            <div class="proj-n">03</div>
          </div>
          <div class="proj-body">
            <div class="proj-cat">Program</div>
            <h3 class="proj-title">Calculator Program</h3>
            <p class="proj-desc">A responsive digital calculator featuring a clean user interface to perform fundamental arithmetic operations including addition, subtraction, multiplication, and division with real-time results.</p>
            <div class="proj-stack">
              <span class="proj-tag">HTML</span>
              <span class="proj-tag">CSS</span>
              <span class="proj-tag">JavaScript</span>
            </div>
            <div class="proj-btns">
              <a href="https://github.com/liyakhoirunnisa/calculator_program.git" target="_blank" class="proj-btn proj-btn-show">
                <svg viewBox="0 0 24 24">
                  <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6" />
                  <polyline points="15 3 21 3 21 9" />
                  <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
                Show
              </a>
            </div>
          </div>
        </div>

        <!-- Project 4 (hidden) -->
        <div class="proj-card hidden">
          <div class="proj-img-wrap">
            <img src="assets/img/concert.png" alt="Concert Ticket Program" />
            <div class="proj-n">04</div>
          </div>
          <div class="proj-body">
            <div class="proj-cat">Program</div>
            <h3 class="proj-title">Concert Ticket Program</h3>
            <p class="proj-desc">An integrated concert ticket system that allows users to seamlessly book tickets, manage cancellations, and review a detailed purchase history for efficient event management.</p>
            <div class="proj-stack">
              <span class="proj-tag">C++</span>
            </div>
            <div class="proj-btns">
              <a href="https://github.com/liyakhoirunnisa/Concert_Ticket_Program.git" target="_blank" class="proj-btn proj-btn-show">
                <svg viewBox="0 0 24 24">
                  <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6" />
                  <polyline points="15 3 21 3 21 9" />
                  <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
                Show
              </a>
            </div>
          </div>
        </div>

        <!-- Project 5 (hidden) -->
        <div class="proj-card hidden">
          <div class="proj-img-wrap">
            <img src="assets/img/hair trendy.png" alt="Hair Trendy App Design" />
            <div class="proj-n">05</div>
          </div>
          <div class="proj-body">
            <div class="proj-cat">Design</div>
            <h3 class="proj-title">Hair Trendy App Design</h3>
            <p class="proj-desc">A modern hair salon platform designed to streamline salon services, featuring a digital hairstyle catalog, professional stylist profiles, and an integrated booking system for effortless appointment management.</p>
            <div class="proj-stack">
              <span class="proj-tag">Figma</span>
            </div>
            <div class="proj-btns">
              <a href="https://www.figma.com/design/g8DbXStnNdiE2S4vErJf2L/Design-Sprint-Hair-Trendy?node-id=0-1&t=zjTudlgWuKTF9vSH-1" target="_blank" class="proj-btn proj-btn-show">
                <svg viewBox="0 0 24 24">
                  <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6" />
                  <polyline points="15 3 21 3 21 9" />
                  <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
                Show
              </a>
            </div>
          </div>
        </div>

      </div>

      <div class="proj-more rv" data-delay="100">
        <button id="show-more" class="btn-main">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M12 5v14M5 12l7 7 7-7" />
          </svg>
          <span>View in Touch</span>
        </button>
      </div>
    </div>
  </section>

  <hr class="section-divider" />

  <!-- ═══════════════════════════════════
     6. CONTACT
═══════════════════════════════════ -->
  <section id="contact" class="section-pad">
    <div style="max-width:1160px; margin:0 auto;">
      <span class="sec-label rv">Contact</span>
      <h2 class="sec-title rv" data-delay="80">Get in Touch</h2>

      <div class="contact-wrap">
        <!-- Left info -->
        <div class="contact-left rv-l">
          <h3>Let’s Work Together!</h3>
          <p>Have an exciting project in mind or just want to chat? Feel free to reach out. I’m always open to new opportunities, challenges, and meaningful collaborations.</p>

          <!-- Illustrative card -->
          <div class="c-illus-box">
            <div class="c-illus-icon">📬</div>
            <div class="c-illus-text">
              <strong>Open to Opportunities</strong>
              <span>Full Time · Freelance · Collaboration</span>
            </div>
          </div>
        </div>

        <!-- Right: form -->
        <div class="cform rv-r">
          <h4>Send a Message ✉️</h4>
          <form id="contactForm" novalidate>
            <div class="f-row">
              <div class="fg">
                <label for="nama">Full Name <em>*</em></label>
                <input type="text" id="nama" name="nama" class="fctrl" placeholder="Full Name" required />
              </div>
              <div class="fg">
                <label for="email">Email Address <em>*</em></label>
                <input type="email" id="email" name="email" class="fctrl" placeholder="Email Address" required />
              </div>
            </div>
            <div class="fg">
              <label for="no_hp">Phone Number</label>
              <input type="tel" id="no_hp" name="no_hp" class="fctrl" placeholder="Phone Number" />
            </div>
            <div class="fg">
              <label for="pesan">Your Message <em>*</em></label>
              <textarea id="pesan" name="pesan" class="fctrl" rows="5" placeholder="Your Message..." required></textarea>
            </div>
            <div class="f-foot">
              <button type="submit" class="btn-main">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="22" y1="2" x2="11" y2="13" />
                  <polygon points="22 2 15 22 11 13 2 9 22 2" />
                </svg>
                <span>Send Message</span>
              </button>
              <div id="fstatus"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ FOOTER ═══ -->
  <footer>
    <div class="ft-top">
      <div>
        <div class="ft-logo">Liya Khoirunnisa</div>
        <div class="ft-tag">Web Developer</div>
      </div>
      <div class="ft-socials">
        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/in/liya-khoirunnisa" target="_blank" class="ft-soc" title="LinkedIn">
          <svg viewBox="0 0 24 24">
            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
          </svg>
        </a>
        <!-- Instagram -->
        <a href="https://www.instagram.com/lykhrnnsa?igsh=dDBhYXpobGhzNmJh" target="_blank" class="ft-soc" title="Instagram">
          <svg viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
          </svg>
        </a>
        <!-- TikTok -->
        <a href="https://www.tiktok.com/@nissaluv_?_r=1&_t=ZS-94lYDGSAdmR" target="_blank" class="ft-soc" title="TikTok">
          <svg viewBox="0 0 24 24">
            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
          </svg>
        </a>
      </div>
    </div>
    <hr class="ft-hr" />
    <div class="ft-bot">
      <span class="ft-copy">&copy; <?= date('Y') ?> Liya Khoirunnisa. All rights reserved.</span>
      <span class="ft-note">Made with ♥ Liya Khoirunnisa</span>
    </div>
  </footer>

  <!-- BACK TO TOP -->
  <button id="btt" aria-label="Back to top">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="18" height="18">
      <polyline points="18 15 12 9 6 15" />
    </svg>
  </button>

  <script src="assets/js/main.js"></script>
</body>

</html>