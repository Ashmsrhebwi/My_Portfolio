

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<!-- LOADER - فقط أول مرة -->
<div id="loader">
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<?php echo $__env->make('admin.dashboard.dashboardStyles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<?php echo $__env->make('admin.dashboard.dashboardScripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/dashboard/dashboard.blade.php ENDPATH**/ ?>