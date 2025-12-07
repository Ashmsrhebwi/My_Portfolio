
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
    z-index: 1000;
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
</style><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/frontend/styles.blade.php ENDPATH**/ ?>