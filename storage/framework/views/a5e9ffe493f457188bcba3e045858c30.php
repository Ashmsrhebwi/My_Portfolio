

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<!-- LOADER - فقط أول مرة -->
<div id="loader" style="display: none;">
    <div class="loading-content">
        <div class="loading-logo">
            <i class="fas fa-crown"></i>
        </div>
        <h2 class="loading-text">Admin Dashboard</h2>
        <p class="loading-subtext">Loading your control panel...</p>
        <div class="loading-spinner"></div>
        <div class="loading-progress">
            <div class="loading-progress-bar"></div>
        </div>
    </div>
</div>

<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="welcome-card">
        <h1>Welcome Admin! 🎉</h1>
        <p>You are logged in successfully. Manage your website content with ease.</p>
    </div>

    <div class="card-grid">
        <!-- ... بقية الكروت كما هي ... -->
        <div class="section-card">
            <h3><i class="fa-solid fa-bolt"></i> Hero Section</h3>
            <a href="<?php echo e(route('admin.hero.edit')); ?>" class="btn-edit">
                <i class="fa-solid fa-pen-to-square"></i> Edit Hero
            </a>
        </div>

        <div class="section-card">
            <h3><i class="fa-solid fa-cogs"></i> Services Section</h3>
            <a href="<?php echo e(route('admin.services.index')); ?>" class="btn-edit">
                <i class="fa-solid fa-sliders"></i> Manage Services
            </a>
        </div>

        <div class="section-card">
            <h3><i class="fa-solid fa-chart-pie"></i> Statistics Section</h3>
            <a href="<?php echo e(route('admin.statistics.index')); ?>" class="btn-edit">
                <i class="fa-solid fa-chart-bar"></i> Manage Statistics
            </a>
        </div>

        <div class="section-card">
            <h3><i class="fa-solid fa-briefcase"></i> Works Section</h3>
            <a href="<?php echo e(route('admin.works.index')); ?>" class="btn-edit">
                <i class="fa-solid fa-folder-open"></i> Manage Works
            </a>
        </div>

        <div class="section-card">
            <h3><i class="fa-solid fa-users"></i> Manage Admins</h3>
            <a href="<?php echo e(route('admin.admins.index')); ?>" class="btn-edit">
                <i class="fa-solid fa-user-cog"></i> Manage Admins
            </a>
        </div>
    </div>
</div>

<style>
    /* ===================== LOADER STYLES ===================== */
    #loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
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
        border-radius: 20px;
        padding: 3rem 2rem;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        max-width: 400px;
        width: 90%;
    }

    .loading-logo {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #ffffff, #e0e7ff);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 2rem;
        box-shadow: 0 15px 30px rgba(255, 255, 255, 0.4);
        animation: pulse 2s infinite;
    }

    .loading-logo i {
        font-size: 2.5rem;
        color: var(--primary);
    }

    .loading-text {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        background: linear-gradient(135deg, #fff, #e0e7ff);
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
        border-left: 4px solid white;
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
        background: linear-gradient(90deg, white, #e0e7ff);
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

    /* ===================== MAIN CONTENT STYLES ===================== */
    .welcome-card {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 40px;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
        animation: fadeIn 0.5s ease;
    }

    .welcome-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
    }

    .welcome-card h1 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 10px;
        position: relative;
    }

    .welcome-card p {
        font-size: 1.1rem;
        opacity: 0.9;
        position: relative;
    }

    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .section-card {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        padding: 25px 30px;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        border: 1px solid var(--gray-light);
        transition: var(--transition);
        display: flex;
        justify-content: space-between;
        align-items: center;
        opacity: 0;
        transform: translateY(20px);
        animation: slideUp 0.5s ease forwards;
    }

    .section-card:nth-child(1) { animation-delay: 0.1s; }
    .section-card:nth-child(2) { animation-delay: 0.2s; }
    .section-card:nth-child(3) { animation-delay: 0.3s; }
    .section-card:nth-child(4) { animation-delay: 0.4s; }

    .section-card:hover {
        box-shadow: var(--shadow-hover);
        transform: translateY(-5px);
    }

    .section-card h3 {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 12px;
        color: white;
        font-weight: bold;
    }

    .section-card h3 i {
        color: white;
        font-size: 1.1rem;
    }

    .btn-edit {
        background-color: white;
        color: var(--primary);
        padding: 12px 24px;
        border-radius: var(--border-radius);
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.3);
    }

    .btn-edit:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(255, 255, 255, 0.4);
        background-color: #f8f9fa;
        color: var(--primary-dark);
    }

    /* ===================== ANIMATIONS ===================== */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===================== RESPONSIVE ===================== */
    @media (max-width: 768px) {
        .welcome-card {
            padding: 25px;
        }
        
        .welcome-card h1 {
            font-size: 1.8rem;
        }
        
        .card-grid {
            grid-template-columns: 1fr;
        }
        
        .section-card {
            flex-direction: column;
            gap: 15px;
            text-align: center;
            padding: 20px;
            font-weight: bold;
        }
        
        .btn-edit {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<script>
// التحقق إذا كانت أول زيارة للصفحة في هذه الجلسة
document.addEventListener('DOMContentLoaded', function() {
    const loader = document.getElementById('loader');
    const mainContent = document.getElementById('main-content');
    
    // التحقق من localStorage إذا تمت زيارة الصفحة مسبقاً
    const hasVisited = localStorage.getItem('dashboardVisited');
    
    if (!hasVisited) {
        // أول زيارة - عرض الـ Loader
        loader.style.display = 'flex';
        mainContent.style.opacity = '0';
        
        setTimeout(function() {
            // إخفاء الـ Loader بعد 2 ثانية
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
            
            // عرض المحتوى الرئيسي
            mainContent.style.opacity = '1';
            
            // حفظ في localStorage أن المستخدم زار الصفحة
            localStorage.setItem('dashboardVisited', 'true');
            
        }, 2000);
    } else {
        // ليس أول زيارة - عرض المحتوى مباشرة
        loader.style.display = 'none';
        mainContent.style.opacity = '1';
    }
    
    // إضافة تأثيرات تفاعلية للكروت
    const cards = document.querySelectorAll('.section-card');
    
    cards.forEach((card, index) => {
        // تأخير ظهور الكروت بالتسلسل
        setTimeout(() => {
            card.style.animation = 'slideUp 0.5s ease forwards';
        }, index * 100 + 300);
        
        // جعل الكروت قابلة للنقر بالكامل
        card.style.cursor = 'pointer';
        card.addEventListener('click', function(e) {
            if (!e.target.closest('a')) {
                const link = this.querySelector('a');
                if (link) {
                    window.location.href = link.href;
                }
            }
        });
    });
    
    // تأثير عند النقر على الأزرار
    const buttons = document.querySelectorAll('.btn-edit');
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation(); // منع انتشار الحدث للكارد
            // يمكن إضافة تأثير إضافي هنا إذا أردت
        });
    });
});

// (اختياري) إعادة تعيين الـ localStorage عند تسجيل الخروج
// يمكن إضافة هذا في صفحة تسجيل الخروج
// localStorage.removeItem('dashboardVisited');
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>