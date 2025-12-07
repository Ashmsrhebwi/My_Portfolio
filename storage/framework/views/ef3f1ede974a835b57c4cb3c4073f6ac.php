
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
</script><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/frontend/scripts.blade.php ENDPATH**/ ?>