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
  <style>
  /* ===================== TOKENS & VARIABLES ===================== */
  :root {
    --primary: #7c3aed;
    --primary-dark: #6d28d9;
    --primary-light: #8b5cf6;
    --primary-soft: rgba(124, 58, 237, 0.15);
    --primary-glow: rgba(124, 58, 237, 0.25);
    
    --radius-sm: 8px;
    --radius-md: 12px;
    --radius-lg: 16px;
    --radius-xl: 20px;
    
    --shadow-sm: 0 2px 8px rgba(0,0,0,0.08);
    --shadow-md: 0 8px 24px rgba(0,0,0,0.12);
    --shadow-lg: 0 16px 40px rgba(0,0,0,0.16);
    
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    --transition-slow: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
  }

  html[data-theme="dark"] {
    --bg-primary: #0f0f23;
    --bg-secondary: #1a1a2e;
    --bg-card: #222334;
    --bg-sidebar: #242636;
    
    --text-primary: #ffffff;
    --text-secondary: #a0a0c0;
    --text-muted: #6c6c8a;
    
    --border-primary: rgba(255,255,255,0.08);
    --border-secondary: rgba(255,255,255,0.12);
    
    --overlay: rgba(10, 12, 20, 0.85);
  }

  html[data-theme="light"] {
    --bg-primary: #f8fafc;
    --bg-secondary: #ffffff;
    --bg-card: #ffffff;
    --bg-sidebar: #ffffff;
    
    --text-primary: #1a1a2e;
    --text-secondary: #4a5568;
    --text-muted: #718096;
    
    --border-primary: rgba(0,0,0,0.06);
    --border-secondary: rgba(0,0,0,0.12);
    
    --overlay: rgba(0, 0, 0, 0.45);
  }

  /* ===================== BASE STYLES ===================== */
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  html {
    scroll-behavior: smooth;
  }

  body {
    background: linear-gradient(135deg, var(--bg-primary), var(--bg-secondary));
    color: var(--text-primary);
    font-family: 'Poppins', system-ui, sans-serif;
    line-height: 1.6;
    overflow-x: hidden;
    min-height: 100vh;
  }

  /* ===================== LOADER WITH BACKGROUND IMAGE ===================== */
  #loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: 
      linear-gradient(135deg, rgba(15, 15, 35, 0.9), rgba(26, 26, 46, 0.95)),
      url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    transition: opacity 0.8s ease, visibility 0.8s ease;
  }

  .loading-content {
    text-align: center;
    color: white;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--radius-xl);
    padding: 3rem 2rem;
    box-shadow: var(--shadow-lg);
    max-width: 400px;
    width: 90%;
  }

  .loading-logo {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, var(--primary), var(--primary-light));
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 2rem;
    box-shadow: 0 15px 30px rgba(124, 58, 237, 0.4);
    animation: pulse 2s infinite;
  }

  .loading-logo i {
    font-size: 2.5rem;
    color: white;
  }

  .loading-text {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    background: linear-gradient(135deg, #fff, var(--primary-light));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .loading-subtext {
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 2rem;
    font-size: 1rem;
  }

  .loading-spinner {
    width: 60px;
    height: 60px;
    border: 4px solid rgba(255, 255, 255, 0.1);
    border-left: 4px solid var(--primary);
    border-radius: 50%;
    margin: 0 auto;
    animation: spin 1.2s linear infinite;
  }

  .loading-progress {
    width: 200px;
    height: 4px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 2px;
    margin: 2rem auto 0;
    overflow: hidden;
  }

  .loading-progress-bar {
    height: 100%;
    background: linear-gradient(90deg, var(--primary), var(--primary-light));
    border-radius: 2px;
    animation: progress 2s ease-in-out infinite;
  }

  @keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

  @keyframes progress {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
  }

  /* ===================== SOCIAL MEDIA BUTTONS ===================== */
  .social-media {
    position: fixed;
    bottom: 2rem;
    left: 2rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    z-index: 95;
  }

  .social-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
    transition: var(--transition);
    box-shadow: var(--shadow-md);
    position: relative;
    overflow: hidden;
  }

  .social-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
    transform: scale(0);
    transition: var(--transition);
    border-radius: 50%;
  }

  .social-btn:hover::before {
    transform: scale(1);
  }

  .social-btn:hover {
    transform: translateY(-3px) scale(1.1);
    box-shadow: var(--shadow-lg);
  }

  .whatsapp {
    background: linear-gradient(135deg, #25D366, #128C7E);
  }

  .linkedin {
    background: linear-gradient(135deg, #0077B5, #00A0DC);
  }

  .github {
    background: linear-gradient(135deg, #333, #6e5494);
  }

  .social-tooltip {
    position: absolute;
    left: 60px;
    top: 50%;
    transform: translateY(-50%);
    background: var(--bg-card);
    color: var(--text-primary);
    padding: 0.5rem 1rem;
    border-radius: var(--radius-md);
    font-size: 0.875rem;
    font-weight: 500;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: var(--transition);
    box-shadow: var(--shadow-md);
    border: 1px solid var(--border-primary);
  }

  .social-btn:hover .social-tooltip {
    opacity: 1;
    visibility: visible;
    left: 65px;
  }

  /* ===================== MAIN CONTENT ===================== */
  #main-content {
    opacity: 0;
    transition: opacity 0.8s ease;
  }

  .content-loaded #main-content {
    opacity: 1;
  }

  /* ===================== LAYOUT ===================== */
  .wrapper {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 1.5rem;
    padding: 1.5rem;
    max-width: 1600px;
    margin: 0 auto;
  }

  @media (max-width: 1024px) {
    .wrapper {
      grid-template-columns: 1fr;
      gap: 1rem;
      padding: 1rem;
    }
  }

  /* ===================== SIDEBAR ===================== */
  .sidebar {
    position: sticky;
    top: 1.5rem;
    height: calc(100vh - 3rem);
    background: var(--bg-sidebar);
    border: 1px solid var(--border-primary);
    border-radius: var(--radius-xl);
    padding: 1.5rem;
    box-shadow: var(--shadow-md);
    backdrop-filter: blur(10px);
  }

  @media (max-width: 1024px) {
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 60%;
      height: 100vh;
      z-index: 100;
      transform: translateX(-100%);
      transition: transform 0.3s ease;
      border-radius: 0;
    }
    
    .sidebar.mobile-open {
      transform: translateX(0);
    }
  }

  .brand {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 2rem;
  }

  .logo {
    width: 40px;
    height: 40px;
    border-radius: var(--radius-md);
    background: linear-gradient(135deg, var(--primary), var(--primary-light));
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 1.2rem;
  }

  .brand strong {
    font-size: 1.25rem;
    font-weight: 700;
    background: linear-gradient(135deg, var(--primary), var(--primary-light));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .theme-toggle {
    margin-left: auto;
    border: 1px solid var(--border-secondary);
    background: transparent;
    color: var(--text-primary);
    border-radius: var(--radius-md);
    padding: 0.5rem;
    transition: var(--transition);
    cursor: pointer;
  }

  .theme-toggle:hover {
    background: var(--primary-soft);
    border-color: var(--primary);
  }

  .nav-link {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1rem;
    color: var(--text-secondary);
    text-decoration: none;
    border-radius: var(--radius-md);
    border: 1px solid transparent;
    transition: var(--transition);
    margin-bottom: 0.25rem;
  }

  .nav-link i {
    width: 20px;
    text-align: center;
    font-size: 1rem;
  }

  .nav-link:hover,
  .nav-link.active {
    color: var(--primary);
    background: var(--primary-soft);
    border-color: var(--primary-glow);
    transform: translateX(4px);
  }

  .nav-link.active {
    font-weight: 600;
  }

  .separator {
    border: none;
    border-top: 1px solid var(--border-primary);
    margin: 1.5rem 0;
  }

  /* Sidebar Social Media */
  .sidebar-social {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid var(--border-primary);
  }

  .social-btn-small {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    font-size: 1rem;
    transition: var(--transition);
    box-shadow: var(--shadow-sm);
  }

  .social-btn-small:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
  }

  /* ===================== MOBILE MENU ===================== */
  .mobile-menu-btn {
    position: fixed;
    top: 1rem;
    left: 1rem;
    z-index: 101;
    background: var(--primary);
    color: white;
    border: none;
    border-radius: var(--radius-md);
    padding: 0.75rem;
    cursor: pointer;
    box-shadow: var(--shadow-lg);
    display: none;
  }

  @media (max-width: 1024px) {
    .mobile-menu-btn {
      display: block;
    }
  }

  .mobile-overlay {
    position: fixed;
    inset: 0;
    background: var(--overlay);
    backdrop-filter: blur(4px);
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    transition: var(--transition);
  }

  .mobile-overlay.show {
    opacity: 1;
    visibility: visible;
  }

  /* ===================== SECTIONS ===================== */
  .section {
    background: var(--bg-card);
    border: 1px solid var(--border-primary);
    border-radius: var(--radius-xl);
    padding: 2rem;
    margin-bottom: 1.5rem;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
  }

  .section:hover {
    box-shadow: var(--shadow-md);
    border-color: var(--border-secondary);
  }

  .section-title {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 1.5rem;
  }

  .title-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--primary);
    box-shadow: 0 0 12px var(--primary-glow);
  }

  .section-title h2 {
    font-size: 1.5rem;
    font-weight: 700;
    margin: 0;
    color: var(--text-primary);
  }

  /* ===================== HERO SECTION ===================== */
  .hero-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 2rem;
    align-items: center;
  }

  @media (max-width: 768px) {
    .hero-grid {
      grid-template-columns: 1fr;
      gap: 1.5rem;
    }
  }

  .hero-card {
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    color: white;
    border-radius: var(--radius-xl);
    padding: 2rem;
    position: relative;
    overflow: hidden;
    box-shadow: var(--shadow-lg);
    z-index: 1;
  }

  .hero-card::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
    transform: rotate(45deg);
    transition: var(--transition-slow);
  }

  .hero-card:hover::before {
    transform: rotate(45deg) translate(50%, 50%);
  }

  .role-badge {
    background: rgba(255,255,255,0.15);
    color: white;
    border: 1px solid rgba(255,255,255,0.3);
    border-radius: 50px;
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    font-weight: 500;
    backdrop-filter: blur(10px);
    display: inline-block;
    margin-bottom: 1rem;
  }

  .hero-name {
    font-size: 2.5rem;
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 1rem;
  }

  .hero-bio {
    font-size: 1.1rem;
    opacity: 0.9;
    line-height: 1.6;
    margin-bottom: 1.5rem;
  }

  .hero-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    align-items: center;
  }

  .btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    border-radius: var(--radius-md);
    text-decoration: none;
    font-weight: 600;
    border: none;
    cursor: pointer;
    transition: var(--transition);
    font-size: 0.875rem;
  }

  .btn-primary {
    background: white;
    color: var(--primary);
  }

  .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
  }

  .btn-ghost {
    background: transparent;
    color: white;
    border: 1px solid rgba(255,255,255,0.3);
  }

  .btn-ghost:hover {
    background: rgba(255,255,255,0.1);
    transform: translateY(-2px);
  }

  /* Hero Social Media */
  .hero-social {
    display: flex;
    gap: 0.5rem;
    margin-left: 1rem;
  }

  .btn-social {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    font-size: 1.1rem;
    transition: var(--transition);
    box-shadow: var(--shadow-sm);
    border: 2px solid rgba(255, 255, 255, 0.3);
  }

  .btn-social:hover {
    transform: translateY(-2px) scale(1.1);
    box-shadow: var(--shadow-md);
    border-color: rgba(255, 255, 255, 0.5);
  }

  .hero-avatar {
    position: relative;
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
    height: 400px;
    background: linear-gradient(135deg, var(--bg-secondary), var(--bg-card));
    z-index: 1;
  }

  .social-media-half {
    z-index: 1000; /* أعلى قيمة */
}
@media (max-width: 768px) {
    .social-media-half {
        transform: translateX(0);
    }
}
  .hero-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .availability-badge {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
    background: rgba(34, 197, 94, 0.9);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 600;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
  }

  /* ===================== STATS & CARDS ===================== */
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
  }

  .stat-card {
    background: linear-gradient(135deg, var(--primary-soft), transparent);
    border: 1px solid var(--border-primary);
    border-radius: var(--radius-lg);
    padding: 1.5rem;
    text-align: center;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
  }

  .stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--primary), var(--primary-light));
  }

  .stat-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-glow);
  }

  .stat-icon {
    font-size: 2rem;
    color: var(--primary);
    margin-bottom: 1rem;
  }

  .stat-value {
    font-size: 2.5rem;
    font-weight: 800;
    background: linear-gradient(135deg, var(--primary), var(--primary-light));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1;
    margin-bottom: 0.5rem;
  }

  .stat-title {
    color: var(--text-secondary);
    font-size: 0.875rem;
    font-weight: 500;
  }

  /* ===================== SERVICES & WORKS ===================== */
  .services-grid,
  .works-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
  }

  .service-card,
  .work-card {
    background: var(--bg-card);
    border: 1px solid var(--border-primary);
    border-radius: var(--radius-lg);
    padding: 1.5rem;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
  }

  .service-card::before,
  .work-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--primary), var(--primary-light));
    transform: scaleX(0);
    transition: var(--transition);
  }

  .service-card:hover::before,
  .work-card:hover::before {
    transform: scaleX(1);
  }

  .service-card:hover,
  .work-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
    border-color: var(--border-secondary);
  }

  .service-icon {
    font-size: 2.5rem;
    color: var(--primary);
    margin-bottom: 1rem;
    text-align: center;
  }

  .service-title,
  .work-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
    text-align: center;
  }

  .work-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: var(--radius-md);
    margin-bottom: 1rem;
  }

  .work-description {
    color: var(--text-secondary);
    font-size: 0.875rem;
    line-height: 1.5;
  }

  .index-badge {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: var(--primary);
    color: white;
    border-radius: var(--radius-md);
    padding: 0.25rem 0.75rem;
    font-size: 0.75rem;
    font-weight: 700;
  }

  /* ===================== CONTACT FORM ===================== */
  .contact-form {
    background: var(--bg-card);
    border: 1px solid var(--border-primary);
    border-radius: var(--radius-xl);
    padding: 2rem;
  }

  .form-group {
    margin-bottom: 1.5rem;
  }

  .form-label {
    display: block;
    margin-bottom: 0.5rem;
    color: var(--text-primary);
    font-weight: 500;
  }

  .form-control {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 1px solid var(--border-primary);
    border-radius: var(--radius-md);
    background: var(--bg-card);
    color: var(--text-primary);
    font-family: inherit;
    transition: var(--transition);
  }

  .form-control:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 3px var(--primary-soft);
  }

  /* ===================== SCROLL TO TOP ===================== */
  .scroll-to-top {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: var(--primary);
    color: white;
    border: none;
    cursor: pointer;
    box-shadow: var(--shadow-lg);
    transition: var(--transition);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 90;
  }

  .scroll-to-top:hover {
    transform: translateY(-2px);
    background: var(--primary-dark);
  }

  .scroll-to-top.show {
    display: flex;
  }

  /* ===================== RESPONSIVE DESIGN ===================== */
  @media (max-width: 768px) {
    .section {
      padding: 1.5rem;
    }
    
    .hero-name {
      font-size: 2rem;
    }
    
    .hero-bio {
      font-size: 1rem;
    }
    
    .stats-grid {
      grid-template-columns: 1fr;
    }
    
    .services-grid,
    .works-grid {
      grid-template-columns: 1fr;
    }
    
    .social-media {
      bottom: 1rem;
      left: 1rem;
      flex-direction: row;
    }
    
    .social-btn {
      width: 45px;
      height: 45px;
      font-size: 1.1rem;
    }
    
    .social-tooltip {
      display: none;
    }
    
    .hero-actions {
      flex-direction: column;
      align-items: flex-start;
    }
    
    .hero-social {
      margin-left: 0;
      margin-top: 1rem;
    }
  }

  @media (max-width: 480px) {
    .wrapper {
      padding: 1rem;
    }
    
    .section {
      padding: 1rem;
      border-radius: var(--radius-lg);
    }
    
    .hero-card {
      padding: 1.5rem;
    }
    
    .btn {
      width: 100%;
      justify-content: center;
    }
  }
  </style>
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
      © 2024 — MyPortfolio. All rights reserved.
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
            <?php echo e($hero->role ?? 'Full-Stack Developer'); ?>

          </span>
          
          <h1 class="hero-name">
            Hello, I'm <br>
            <span style="background: linear-gradient(135deg, #fff, #e0e7ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
              <?php echo e($hero->name ?? 'Your Name'); ?>

            </span>
          </h1>
          
          <p class="hero-bio">
            <?php echo e($hero->bio ?? 'Passionate developer crafting digital experiences with modern technologies and creative solutions.'); ?>

          </p>

          <div class="hero-actions">
            <?php if($hero && $hero->cv_file): ?>
                <a href="<?php echo e(route('hero.downloadCv', $hero->cv_file)); ?>" class="btn btn-primary" target="_blank">
                    <i class="fas fa-download"></i>
                    Download CV
                </a>
            <?php else: ?>
                <a href="#" class="btn btn-primary disabled" style="pointer-events: none; opacity: 0.6;">
                    <i class="fas fa-download"></i>
                    CV Not Available
                </a>
            <?php endif; ?>
            
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
          <?php if($hero && $hero->profile_image): ?>
              <img src="<?php echo e(asset('storage/' . $hero->profile_image)); ?>" alt="<?php echo e($hero->name); ?>">
          <?php else: ?>
              <div style="display: flex; align-items: center; justify-content: center; height: 100%; background: linear-gradient(135deg, var(--primary-soft), transparent); color: var(--text-secondary);">
                  <i class="fas fa-user fa-4x"></i>
              </div>
          <?php endif; ?>

        <?php if($hero && $hero->open_to_work): ?>
            <div class="availability-badge">
                <i class="fas fa-circle fa-xs" style="color: #22c55e; margin-right: 0.5rem;"></i>
                Open to Work
            </div>
        <?php endif; ?>
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
        <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="stat-card">
          <div class="stat-icon">
            <i class="<?php echo e($stat->icon ?? 'fas fa-chart-line'); ?>"></i>
          </div>
          <div class="stat-value"><?php echo e($stat->value); ?>%</div>
          <div class="stat-title"><?php echo e($stat->title); ?></div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </section>

    <!-- SERVICES SECTION -->
<section id="services" class="section">
    <div class="section-title">
        <span class="title-dot"></span>
        <h2>Our Services</h2>
    </div>

    <?php
        $services = \App\Models\Service::all();
    ?>

    <div class="services-grid">
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="service-card">
            <span class="index-badge"><?php echo e(str_pad($index + 1, 2, '0', STR_PAD_LEFT)); ?></span>
            <?php if($service->icon): ?>
            <div class="service-icon">
                <i class="<?php echo e($service->icon); ?>"></i>
            </div>
            <?php endif; ?>
            <h3 class="service-title"><?php echo e($service->name); ?></h3>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

    <!-- WORKS SECTION -->
    <section id="works" class="section">
      <div class="section-title">
        <span class="title-dot"></span>
        <h2>Featured Works</h2>
      </div>

      <?php
          $works = \App\Models\Work::all();
      ?>

      <div class="works-grid">
        <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="work-card">
          <span class="index-badge"><?php echo e(str_pad($index + 1, 2, '0', STR_PAD_LEFT)); ?></span>
          <img src="<?php echo e($work->image); ?>" alt="<?php echo e($work->title); ?>" class="work-image">
          <h3 class="work-title"><?php echo e($work->title); ?></h3>
          <p class="work-description"><?php echo e($work->description); ?></p>
          <a href="<?php echo e($work->link); ?>" target="_blank" class="btn btn-primary" style="margin-top: 1rem; width: 100%; text-align: center;">
            View Project
          </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="section">
      <div class="section-title">
        <span class="title-dot"></span>
        <h2>Get In Touch</h2>
      </div>

      <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="contact-form">
        <?php echo csrf_field(); ?>
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
<script>
// Loader
window.addEventListener('load', function() {
  setTimeout(function() {
    const loader = document.getElementById('loader');
    const mainContent = document.getElementById('main-content');
    
    loader.style.opacity = '0';
    loader.style.visibility = 'hidden';
    
    mainContent.style.opacity = '1';
    document.body.classList.add('content-loaded');
    
  }, 2000);
});

// Theme Toggle
const themeBtn = document.getElementById('themeBtn');
const html = document.documentElement;

const savedTheme = localStorage.getItem('theme') || 'dark';
html.setAttribute('data-theme', savedTheme);
updateThemeIcon();

themeBtn.addEventListener('click', function() {
  const currentTheme = html.getAttribute('data-theme');
  const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
  
  html.setAttribute('data-theme', newTheme);
  localStorage.setItem('theme', newTheme);
  updateThemeIcon();
});

function updateThemeIcon() {
  const currentTheme = html.getAttribute('data-theme');
  themeBtn.innerHTML = currentTheme === 'dark' 
    ? '<i class="fas fa-sun"></i>' 
    : '<i class="fas fa-moon"></i>';
}

// Mobile Menu
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mobileOverlay = document.getElementById('mobileOverlay');
const sidebar = document.getElementById('sidebar');

mobileMenuBtn.addEventListener('click', function() {
  sidebar.classList.toggle('mobile-open');
  mobileOverlay.classList.toggle('show');
});

mobileOverlay.addEventListener('click', function() {
  sidebar.classList.remove('mobile-open');
  mobileOverlay.classList.remove('show');
});

// Active Navigation
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('.nav-link');

window.addEventListener('scroll', function() {
  let current = '';
  const scrollY = window.pageYOffset + 100;

  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    
    if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
      current = section.getAttribute('id');
    }
  });

  navLinks.forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href') === `#${current}`) {
      link.classList.add('active');
    }
  });

  // Scroll to top button
  const scrollToTop = document.getElementById('scrollToTop');
  if (window.pageYOffset > 300) {
    scrollToTop.style.display = 'flex';
  } else {
    scrollToTop.style.display = 'none';
  }
});

// Scroll to top
document.getElementById('scrollToTop').addEventListener('click', function() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});

// Social Media Animation
document.querySelectorAll('.social-btn').forEach(btn => {
  btn.addEventListener('mouseenter', function() {
    this.style.transform = 'translateY(-3px) scale(1.1)';
  });
  
  btn.addEventListener('mouseleave', function() {
    this.style.transform = 'translateY(0) scale(1)';
  });
});
</script>

</body>
</html><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views\frontend\landing.blade.php ENDPATH**/ ?>