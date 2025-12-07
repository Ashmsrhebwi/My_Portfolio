<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', 'Admin Panel'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <?php echo $__env->make('admin.layouts.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>

<div class="wrapper">
    <!-- الـ Sidebar الموحد -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2><i class="fas fa-crown"></i> Admin Panel</h2>
        </div>
        <nav class="sidebar-nav">
            <a href="<?php echo e(route('admin.dashboard.dashboard')); ?>" class="<?php echo e(request()->routeIs('admin.dashboard.dashboard') ? 'active' : ''); ?>">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
            <a href="<?php echo e(route('admin.hero.edit')); ?>" class="<?php echo e(request()->routeIs('admin.hero.*') ? 'active' : ''); ?>">
                <i class="fas fa-bolt"></i>
                <span>Manage Hero</span>
            </a>
            <a href="<?php echo e(route('admin.services.index')); ?>" class="<?php echo e(request()->routeIs('admin.services.*') ? 'active' : ''); ?>">
                <i class="fas fa-cogs"></i>
                <span>Manage Services</span>
            </a>
            <a href="<?php echo e(route('admin.statistics.index')); ?>" class="<?php echo e(request()->routeIs('admin.statistics.*') ? 'active' : ''); ?>">
                <i class="fas fa-chart-pie"></i>
                <span>Statistics</span>
            </a>
            <a href="<?php echo e(route('admin.works.index')); ?>" class="<?php echo e(request()->routeIs('admin.works.*') ? 'active' : ''); ?>">
                <i class="fas fa-briefcase"></i>
                <span>Manage Works</span>
            </a>
            <a href="<?php echo e(route('admin.admins.index')); ?>" class="<?php echo e(request()->routeIs('admin.admins.*') ? 'active' : ''); ?>">
                <i class="fas fa-users"></i>
                <span>Manage Admins</span>
            </a>
            <a href="<?php echo e(route('admin.dashboard.logout')); ?>" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </nav>
    </aside>

    <!-- المحتوى المتغير -->
    <main class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>