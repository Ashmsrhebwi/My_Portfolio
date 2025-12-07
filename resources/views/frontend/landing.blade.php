<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme="dark">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Shahm Sardini</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  @include('frontend.styles')
</head>
<body>

<!-- LOADER WITH BACKGROUND IMAGE -->
<div id="loader">
  <div class="loading-content">
    <div class="loading-logo">
      <i class="fas fa-code"></i>
    </div>
    <h2 class="loading-text">MyPortfolio</h2>
    <p class="loading-subtext">Loading...</p>
    <div class="loading-spinner"></div>
    <div class="loading-progress">
      <div class="loading-progress-bar"></div>
    </div>
  </div>
</div>

<!-- SOCIAL MEDIA BUTTONS -->
<!-- <div class="social-media">
  <a href="https://wa.me/1234567890" target="_blank" class="social-btn whatsapp">
    <i class="fab fa-whatsapp"></i>
    <span class="social-tooltip">Chat on WhatsApp</span>
  </a>
  <a href="https://linkedin.com/in/yourprofile" target="_blank" class="social-btn linkedin">
    <i class="fab fa-linkedin-in"></i>
    <span class="social-tooltip">Connect on LinkedIn</span>
  </a>
  <a href="https://github.com/yourusername" target="_blank" class="social-btn github">
    <i class="fab fa-github"></i>
    <span class="social-tooltip">View GitHub Profile</span>
  </a>
</div> -->

<!-- MOBILE MENU BUTTON -->
 <div id="main-content">
  <button class="mobile-menu-btn" id="mobileMenuBtn">
    <i class="fas fa-bars"></i>
  </button>

<!-- MOBILE OVERLAY -->
<div class="mobile-overlay" id="mobileOverlay"></div>

<div class="wrapper">
  <!-- SIDEBAR -->
  <aside class="sidebar" id="sidebar">
    <div class="brand">
      <div class="logo">A</div>
      <strong>Applfy</strong>
      <button class="theme-toggle" id="themeBtn">
        <i class="fas fa-moon"></i>
      </button>
    </div>

    <nav class="nav d-block">
      <a href="#home" class="nav-link active">
        <i class="fas fa-user"></i>
        <span>About</span>
      </a>
      <a href="#stats" class="nav-link">
        <i class="fas fa-chart-bar"></i>
        <span>Stats & Skills</span>
      </a>
      <a href="#services" class="nav-link">
        <i class="fas fa-cogs"></i>
        <span>Services</span>
      </a>
      <a href="#works" class="nav-link">
        <i class="fas fa-briefcase"></i>
        <span>Works</span>
      </a>
      <a href="#contact" class="nav-link">
        <i class="fas fa-envelope"></i>
        <span>Contact</span>
      </a>
    </nav>

    <hr class="separator">

    <!-- Sidebar Social Media -->
    <!-- <div class="sidebar-social">
      <div class="text-muted small mb-2">Connect With Me</div>
      <div class="d-flex gap-2">
        <a href="https://wa.me/1234567890" target="_blank" class="social-btn-small whatsapp">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://linkedin.com/in/yourprofile" target="_blank" class="social-btn-small linkedin">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://github.com/yourusername" target="_blank" class="social-btn-small github">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </div> -->

    <div class="text-muted small mt-3">
      © 2026 — MyPortfolio. All rights reserved.
    </div>
  </aside>

  <!-- MAIN CONTENT -->
  <main>
    <!-- HERO SECTION -->
    <section id="home" class="section">
      <div class="section-title">
        <span class="title-dot"></span>
        <h2>About Me</h2>
      </div>

      <div class="hero-grid">
        <div class="hero-card">
          <span class="role-badge">
            {{ $hero->role ?? 'Full-Stack Developer' }}
          </span>
          
          <h1 class="hero-name">
            Hello, I'm <br>
            <span style="background: linear-gradient(135deg, #fff, #e0e7ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
              {{ $hero->name ?? 'Your Name' }}
            </span>
          </h1>
          
          <p class="hero-bio">
            {{ $hero->bio ?? 'Passionate developer crafting digital experiences with modern technologies and creative solutions.' }}
          </p>

          <div class="hero-actions">
            @if($hero && $hero->cv_file)
                <a href="{{ route('hero.downloadCv', $hero->cv_file) }}" class="btn btn-primary" target="_blank">
                    <i class="fas fa-download"></i>
                    Download CV
                </a>
            @else
                <a href="#" class="btn btn-primary disabled" style="pointer-events: none; opacity: 0.6;">
                    <i class="fas fa-download"></i>
                    CV Not Available
                </a>
            @endif
            
            <!-- Hero Social Media -->
             <div class="social-media-half">

            <div class="hero-social">
              <a href="https://wa.me/+905510987184" target="_blank" class="btn-social whatsapp">
                <i class="fab fa-whatsapp"></i>
              </a>
              <a href="https://linkedin.com/in/shahm-sardini-60621a230" target="_blank" class="btn-social linkedin">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://github.com/ShahmWeb" target="_blank" class="btn-social github">
                <i class="fab fa-github"></i>
              </a>
            </div>
</div>

          </div>
        </div>

        <div class="hero-avatar">
          @if($hero && $hero->profile_image)
              <img src="{{ asset('storage/' . $hero->profile_image) }}" alt="{{ $hero->name }}">
          @else
              <div style="display: flex; align-items: center; justify-content: center; height: 100%; background: linear-gradient(135deg, var(--primary-soft), transparent); color: var(--text-secondary);">
                  <i class="fas fa-user fa-4x"></i>
              </div>
          @endif

        @if($hero && $hero->open_to_work)
            <div class="availability-badge">
                <i class="fas fa-circle fa-xs" style="color: #22c55e; margin-right: 0.5rem;"></i>
                Open to Work
            </div>
        @endif
        </div>
      </div>
    </section>

    <!-- STATISTICS SECTION -->
    <section id="stats" class="section">
      <div class="section-title">
        <span class="title-dot"></span>
        <h2>Statistics & Skills</h2>
      </div>

      <div class="stats-grid">
        @foreach($statistics as $stat)
        <div class="stat-card">
          <div class="stat-icon">
            <i class="{{ $stat->icon ?? 'fas fa-chart-line' }}"></i>
          </div>
          <div class="stat-value">{{ $stat->value }}%</div>
          <div class="stat-title">{{ $stat->title }}</div>
        </div>
        @endforeach
      </div>
    </section>

    <!-- SERVICES SECTION -->
<section id="services" class="section">
    <div class="section-title">
        <span class="title-dot"></span>
        <h2>Our Services</h2>
    </div>

    @php
        $services = \App\Models\Service::all();
    @endphp

    <div class="services-grid">
        @foreach($services as $index => $service)
        <div class="service-card">
            <span class="index-badge">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
            @if($service->icon)
            <div class="service-icon">
                <i class="{{ $service->icon }}"></i>
            </div>
            @endif
            <h3 class="service-title">{{ $service->name }}</h3>
        </div>
        @endforeach
    </div>
</section>

    <!-- WORKS SECTION -->
    <section id="works" class="section">
      <div class="section-title">
        <span class="title-dot"></span>
        <h2>Featured Works</h2>
      </div>

      @php
          $works = \App\Models\Work::all();
      @endphp

      <div class="works-grid">
        @foreach($works as $index => $work)
        <div class="work-card">
          <span class="index-badge">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
          <img src="{{ $work->image }}" alt="{{ $work->title }}" class="work-image">
          <h3 class="work-title">{{ $work->title }}</h3>
          <p class="work-description">{{ $work->description }}</p>
          <a href="{{ $work->link }}" target="_blank" class="btn btn-primary" style="margin-top: 1rem; width: 100%; text-align: center;">
            View Project
          </a>
        </div>
        @endforeach
      </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="section">
      <div class="section-title">
        <span class="title-dot"></span>
        <h2>Get In Touch</h2>
      </div>

      <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" name="name" id="name" class="form-control" required placeholder="Enter your name">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" name="email" id="email" class="form-control" required placeholder="Enter your email">
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label for="phone" class="form-label">Phone Number (Optional)</label>
          <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter your phone number">
        </div>
        
        <div class="form-group">
          <label for="message" class="form-label">Message</label>
          <textarea name="message" id="message" class="form-control" rows="5" required placeholder="Tell me about your project..."></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary" style="padding: 1rem 2rem;">
          <i class="fas fa-paper-plane"></i>
          Send Message
        </button>
      </form>
    </section>
  </main>
</div>

<!-- SCROLL TO TOP -->
<button class="scroll-to-top" id="scrollToTop">
  <i class="fas fa-chevron-up"></i>
</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@include('frontend.scripts')
</body>
</html>