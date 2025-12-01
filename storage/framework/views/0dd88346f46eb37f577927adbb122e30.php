<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', 'Admin Panel'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary: #7c3aed;
            --primary-dark: #6d28d9;
            --primary-light: #8b5cf6;
            --dark-bg: #0f172a;
            --dark-card: #1e293b;
            --dark-sidebar: #151521;
            --text: #f1f5f9;
            --text-muted: #94a3b8;
            --border: #334155;
            --border-radius: 12px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: var(--dark-bg);
            color: var(--text);
            min-height: 100vh;
        }

        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* === SIDEBAR - نفسو بكل الصفحات === */
        .sidebar {
            width: 280px;
            background: linear-gradient(180deg, var(--dark-sidebar) 0%, #0f1120 100%);
            padding: 30px 25px;
            border-right: 1px solid var(--border);
            flex-shrink: 0;
        }

        .sidebar-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border);
        }

        .sidebar h2 {
            font-size: 22px;
            color: var(--primary-light);
            font-weight: 700;
        }

        .sidebar-nav {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--text-muted);
            text-decoration: none;
            padding: 14px 16px;
            font-size: 15px;
            font-weight: 500;
            border-radius: var(--border-radius);
            transition: var(--transition);
            position: relative;
        }

        .sidebar a::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: var(--primary);
            transform: scaleY(0);
            transition: var(--transition);
        }

        .sidebar a:hover {
            background: rgba(124, 58, 237, 0.1);
            color: var(--text);
            transform: translateX(5px);
        }

        .sidebar a:hover::before {
            transform: scaleY(1);
        }

        .sidebar a i {
            font-size: 16px;
            width: 20px;
            text-align: center;
        }

        .sidebar a.active {
            background: rgba(124, 58, 237, 0.1);
            color: var(--primary-light);
        }

        .sidebar a.active::before {
            transform: scaleY(1);
        }

        .sidebar a.logout {
            margin-top: 20px;
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444 !important;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .sidebar a.logout:hover {
            background: #ef4444;
            color: white !important;
        }

        /* المحتوى الرئيسي */
        .content {
            flex: 1;
            padding: 40px;
            background: var(--dark-bg);
            min-height: 100vh;
        }

        /* === RESPONSIVE === */
        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                padding: 20px;
            }
            
            .sidebar-nav {
                flex-direction: row;
                overflow-x: auto;
                gap: 5px;
            }
            
            .sidebar a {
                white-space: nowrap;
                padding: 12px 15px;
                flex-direction: column;
                text-align: center;
                gap: 5px;
                font-size: 13px;
            }
            
            .content {
                padding: 20px;
            }
        }
    </style>
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
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="<?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">
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
            <a href="<?php echo e(route('admin.logout')); ?>" class="logout">
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

</body>
</html><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views\admin\layouts\master.blade.php ENDPATH**/ ?>