<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MileleTech – website</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root {
  --ink: #1a237e;
  --ink-soft: #283593;
  --ink-muted: #5c6bc0;
  --bg: #f4f6fa;
  --white: #ffffff;
  --accent: #1a237e;
  --accent-light: #e8eaf6;
  --accent2: #ffc107;
  --accent2-light: #fff8e1;
  --border: rgba(20,30,60,0.10);
  --shadow-lg: 0 24px 60px -12px rgba(10,22,40,0.22), 0 4px 16px -4px rgba(10,22,40,0.10);
  --shadow-sm: 0 4px 16px -4px rgba(10,22,40,0.12);
  --radius: 14px;
  --nav-h: 72px;
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

body {
  font-family: 'Sora', sans-serif;
  background: var(--bg);
  min-height: 100vh;
}

/* ─── NAVBAR SHELL ─── */
.navbar-shell {
  position: sticky;
  top: 0;
  z-index: 1000;
  width: 100%;
  background: rgba(255,255,255,0.82);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border-bottom: 1px solid var(--border);
  box-shadow: 0 2px 24px rgba(10,22,40,0.07);
}

.navbar {
  max-width: 1440px;
  margin: 0 auto;
  height: var(--nav-h);
  padding: 0 2.5rem;
  display: flex;
  align-items: center;
  gap: 0;
}

/* ─── LOGO ─── */
.logo {
  display: flex;
  align-items: center;
  gap: 0.7rem;
  text-decoration: none;
  margin-right: 2.5rem;
  flex-shrink: 0;
}
.logo-mark {
  width: 38px;
  height: 38px;
  background: #1a237e;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
}
.logo-mark::before {
  content: '';
  position: absolute;
  width: 18px;
  height: 18px;
  border: 2.5px solid #ffc107;
  border-radius: 50%;
}
.logo-mark::after {
  content: '';
  position: absolute;
  width: 8px;
  height: 8px;
  background: #ffffff;
  border-radius: 50%;
}
.logo-text {
  display: flex;
  flex-direction: column;
  line-height: 1.1;
}
.logo-name {
  font-size: 1.15rem;
  font-weight: 700;
  color: #1a237e;
  letter-spacing: -0.03em;
}
.logo-tag {
  font-family: 'DM Mono', monospace;
  font-size: 0.65rem;
  color: #ffc107;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

/* ─── NAV LIST ─── */
.nav-list {
  display: flex;
  align-items: center;
  list-style: none;
  flex: 1;
  gap: 0;
}

.nav-item {
  position: relative;
}

.nav-link {
  display: flex;
  align-items: center;
  gap: 0.35rem;
  padding: 0.55rem 1rem;
  font-size: 0.875rem;
  font-weight: 500;
  color: var(--ink-soft);
  text-decoration: none;
  border-radius: 8px;
  transition: all 0.18s ease;
  white-space: nowrap;
  letter-spacing: -0.01em;
  cursor: pointer;
  border: none;
  background: none;
  font-family: 'Sora', sans-serif;
}
.nav-link:hover, .nav-item:hover > .nav-link {
  color: var(--ink);
  background: rgba(20,85,255,0.06);
}

.nav-link .arrow {
  width: 14px;
  height: 14px;
  opacity: 0.5;
  transition: transform 0.2s ease, opacity 0.2s ease;
  flex-shrink: 0;
}
.nav-item:hover > .nav-link .arrow {
  transform: rotate(180deg);
  opacity: 0.9;
}

/* ─── RIGHT SIDE ─── */
.nav-right {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  margin-left: auto;
  flex-shrink: 0;
}

.btn-quote {
  padding: 0.55rem 1.25rem;
  font-size: 0.85rem;
  font-weight: 600;
  color: var(--accent);
  background: var(--accent-light);
  border: 1px solid rgba(20,85,255,0.18);
  border-radius: 8px;
  text-decoration: none;
  font-family: 'Sora', sans-serif;
  transition: all 0.18s ease;
  white-space: nowrap;
  cursor: pointer;
}
.btn-quote:hover {
  background: rgba(20,85,255,0.14);
  border-color: rgba(20,85,255,0.35);
}

.btn-contact {
  padding: 0.55rem 1.3rem;
  font-size: 0.85rem;
  font-weight: 600;
  color: #fff;
  background: var(--ink);
  border: none;
  border-radius: 8px;
  text-decoration: none;
  font-family: 'Sora', sans-serif;
  transition: all 0.2s ease;
  white-space: nowrap;
  cursor: pointer;
  position: relative;
  overflow: hidden;
}
.btn-contact::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, #283593 0%, #1a237e 100%);
  opacity: 0;
  transition: opacity 0.2s ease;
}
.btn-contact span { position: relative; z-index: 1; }
.btn-contact:hover::before { opacity: 1; }

/* ─── DROPDOWN MEGAS ─── */
.dropdown {
  position: absolute;
  top: calc(100% + 12px);
  left: 50%;
  transform: translateX(-50%);
  background: var(--white);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  box-shadow: var(--shadow-lg);
  padding: 1.25rem;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.18s ease, transform 0.18s ease;
  transform: translateX(-50%) translateY(-6px);
  min-width: 220px;
  z-index: 200;
}

.nav-item:hover > .dropdown {
  opacity: 1;
  pointer-events: auto;
  transform: translateX(-50%) translateY(0);
}

/* Mega: Services – wide */
.dropdown.mega {
  left: 0;
  transform: none;
  min-width: 720px;
  padding: 1.75rem;
}
.nav-item:hover > .dropdown.mega {
  transform: none;
}

.mega-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0.5rem 1.5rem;
}

.mega-col-title {
  font-family: 'DM Mono', monospace;
  font-size: 0.65rem;
  font-weight: 500;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--ink-muted);
  padding: 0.4rem 0.75rem 0.6rem;
  border-bottom: 1px solid var(--border);
  margin-bottom: 0.25rem;
  grid-column: 1/-1;
}

.mega-section {
  display: flex;
  flex-direction: column;
}

.mega-section-head {
  font-size: 0.7rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: var(--ink-muted);
  padding: 0.5rem 0.75rem 0.4rem;
}

.drop-link {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.45rem 0.75rem;
  font-size: 0.85rem;
  font-weight: 400;
  color: var(--ink-soft);
  text-decoration: none;
  border-radius: 7px;
  transition: all 0.14s ease;
}
.drop-link::before {
  content: '';
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background: var(--border);
  flex-shrink: 0;
  transition: background 0.14s ease;
}
.drop-link:hover {
  background: var(--accent-light);
  color: var(--accent);
}
.drop-link:hover::before {
  background: var(--accent);
}

/* Simple list dropdown */
.drop-list {
  display: flex;
  flex-direction: column;
  gap: 0.1rem;
}

/* Innovation: special styling */
.innovation-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.25rem;
  font-family: 'DM Mono', monospace;
  font-size: 0.6rem;
  font-weight: 500;
  letter-spacing: 0.06em;
  color: #1a237e;
  background: #fff8e1;
  padding: 0.15rem 0.5rem;
  border-radius: 20px;
  border: 1px solid rgba(255,193,7,0.5);
  margin-left: 0.4rem;
}

.nav-link.innovation-link {
  color: #1a237e;
  background: #fff8e1;
  border: 1px solid rgba(255,193,7,0.3);
}
.nav-link.innovation-link:hover {
  background: #fff3cd;
  border-color: rgba(255,193,7,0.6);
}

/* ─── DIVIDER ─── */
.nav-divider {
  width: 1px;
  height: 24px;
  background: var(--border);
  margin: 0 0.5rem;
  flex-shrink: 0;
}

/* ─── DEMO HERO BELOW NAV ─── */
.hero {
  max-width: 900px;
  margin: 8rem auto 4rem;
  text-align: center;
  padding: 0 2rem;
}
.hero h1 {
  font-size: clamp(2.4rem, 5vw, 4rem);
  font-weight: 700;
  color: var(--ink);
  letter-spacing: -0.04em;
  line-height: 1.1;
  margin-bottom: 1.25rem;
}
.hero h1 span {
  background: linear-gradient(135deg, var(--accent) 0%, var(--accent2) 100%);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}
.hero p {
  font-size: 1.1rem;
  color: var(--ink-muted);
  line-height: 1.7;
  max-width: 600px;
  margin: 0 auto;
}
.hero-tag {
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  font-family: 'DM Mono', monospace;
  font-size: 0.72rem;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--accent);
  background: var(--accent-light);
  border: 1px solid rgba(20,85,255,0.2);
  padding: 0.4rem 1rem;
  border-radius: 40px;
  margin-bottom: 1.5rem;
}

/* ─── MOBILE BURGER ─── */
.burger {
  display: none;
  flex-direction: column;
  gap: 5px;
  cursor: pointer;
  padding: 0.4rem;
  margin-left: auto;
  border: none;
  background: none;
}
.burger span {
  display: block;
  width: 22px;
  height: 2px;
  background: var(--ink);
  border-radius: 2px;
  transition: all 0.2s ease;
}

@media (max-width: 1024px) {
  .nav-list, .nav-right { display: none; }
  .burger { display: flex; }
  .logo { margin-right: 0; }
}
</style>
</head>
<body>

<div class="navbar-shell">
  <nav class="navbar" aria-label="Main navigation">

    <!-- Logo -->
    <a href="#" class="logo">
      <div class="logo-mark"></div>
      <div class="logo-text">
        <span class="logo-name">MileleTech</span>
        
      </div>
    </a>

    <!-- Nav List -->
    <ul class="nav-list">

      <!-- Home -->
      <li class="nav-item">
        <a href="#" class="nav-link">Home</a>
      </li>

     

      <!-- Services – Mega -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          About Us
          <svg class="arrow" viewBox="0 0 16 16" fill="none"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="dropdown" style="min-width: 230px;">
          <div class="drop-list">
            <a href="#" class="drop-link">Company Overview</a>
            <a href="#" class="drop-link">Vision & Mission</a>
            <a href="#" class="drop-link">Core Values</a>
            <a href="#" class="drop-link">Our Team</a>
            <a href="#" class="drop-link">Why Choose Us</a>
          </div>
        </div>
      </li>

      <!-- Industries -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          our services
          <svg class="arrow" viewBox="0 0 16 16" fill="none"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="dropdown" style="min-width: 210px;">
          <div class="drop-list">
            <a href="#" class="drop-link">ICT Solutions</a>
            <a href="#" class="drop-link">Software & Business</a>
            <a href="#" class="drop-link">Printing & Branding</a>
            <a href="#" class="drop-link">Automation & Control</a>
            <a href="#" class="drop-link">consultancy</a>
          </div>
        </div>
      </li>

      <!-- Projects -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          Projects
          <svg class="arrow" viewBox="0 0 16 16" fill="none"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="dropdown" style="min-width: 210px;">
          <div class="drop-list">
            <a href="#" class="drop-link">Completed Projects</a>
            <a href="#" class="drop-link">Case Studies</a>
            <a href="#" class="drop-link">Client Success Stories</a>
          </div>
        </div>
      </li>

     <!-- Partners -->
     <li class="nav-item">
        <a href="#" class="nav-link">
          Partners
          <svg class="arrow" viewBox="0 0 16 16" fill="none"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="dropdown" style="min-width: 200px;">
          <div class="drop-list">
            <a href="#" class="drop-link">Our Partners</a>
            <a href="#" class="drop-link">Our Clients</a>
            <a href="#" class="drop-link">Testimonials</a>
          </div>
        </div>
      </li>

      <!-- Careers -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          Careers
          <svg class="arrow" viewBox="0 0 16 16" fill="none"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="dropdown" style="min-width: 200px;">
          <div class="drop-list">
            <a href="#" class="drop-link">Open Positions</a>
            <a href="#" class="drop-link">Internship Program</a>
            <a href="#" class="drop-link">Apply Online</a>
          </div>
        </div>
      </li>

    </ul>

    <!-- Right CTA buttons -->
    <div class="nav-right">
      <a href="#" class="btn-quote">Get a Quote</a>
      <a href="#" class="btn-contact"><span>Contact Us</span></a>
    </div>

    <!-- Mobile burger -->
    <button class="burger" aria-label="Open menu">
      <span></span><span></span><span></span>
    </button>

  </nav>
</div>
     

      

    

     
     
    



<!-- Demo content below navbar -->


</body>
</html>