

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="welcome-card">
    <h1>Welcome Admin! 🎉</h1>
    <p>You are logged in successfully. Manage your website content with ease.</p>
</div>

<div class="card-grid">
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
</div>

<style>
    .welcome-card {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 40px;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
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
    }
    .section-card a {
        /* background-color: white; */
    }

    .section-card:hover {
        box-shadow: var(--shadow-hover);
        transform: translateY(-2px);
    }

    .section-card h3 {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--dark);
        display: flex;
        align-items: center;
        gap: 12px;
        color: black;
        font-weight: bold;
    }

    .section-card h3 i {
        /* color: var(--primary); */
        font-size: 1.1rem;
    }

    .btn-edit {
        background-color: #380d84ff;
        color: white;
        padding: 12px 24px;
        border-radius: var(--border-radius);
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 15px rgba(124, 58, 237, 0.3);
    }

    .btn-edit:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(124, 58, 237, 0.4);
        color: white;
    }

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>