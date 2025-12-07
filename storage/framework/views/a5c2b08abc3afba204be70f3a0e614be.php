<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - MyPortfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php echo $__env->make('admin.dashboard.loginStyles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<body>

    <!-- Login Section -->
    <div class="login-section">
        <div class="login-container">
            <div class="logo">
                <div class="logo-icon floating">
                    <i class="fas fa-lock"></i>
                </div>
                <h1>MyPortfolio</h1>
            </div>

            <div class="welcome-text">
                <h2>Welcome Back</h2>
                <p>Sign in to access your admin dashboard</p>
            </div>

            <?php if(session('error')): ?>
                <div class="error-message">
                    <i class="fas fa-exclamation-circle"></i> <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('admin.dashboard.login.submit')); ?>" method="POST" autocomplete="on">
                <?php echo csrf_field(); ?>
                
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" name="email" class="form-input" placeholder="Enter your email" required autocomplete="username">
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="password" name="password" class="form-input" placeholder="Enter your password" required autocomplete="current-password">
                        <i class="fas fa-lock"></i>
                    </div>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me for 30 days</label>
                </div>

                <button type="submit" class="btn-login">
                    <i class="fas fa-sign-in-alt"></i> Sign In
                </button>
            </form>
        </div>
    </div>

    <!-- Image Section -->
    <div class="image-section">
        <div class="image-content">
            <h1 class="image-title">
                Manage Your Portfolio <br>
                Like a <span class="highlight">Pro</span> 💼
            </h1>
            <p class="image-subtitle">
                Welcome back, Admin! Access your complete dashboard <br>
                to manage your portfolio with powerful tools.
            </p>
        </div>
    </div>

</body>
</html><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/dashboard/login.blade.php ENDPATH**/ ?>