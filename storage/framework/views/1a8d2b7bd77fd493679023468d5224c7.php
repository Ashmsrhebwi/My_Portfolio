<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Code - MyPortfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php echo $__env->make('admin.dashboard.verifyStyles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<body>
    <form method="POST" action="<?php echo e(route('admin.dashboard.verify.otp')); ?>">
        <?php echo csrf_field(); ?>
        <div class="container">
            <div class="logo">
                <i class="fas fa-shield-alt"></i>
            </div>
            
            <h2>Verification Code</h2>
            <p class="subtitle">Enter the 6-digit code sent to your email</p>

            <?php if(session('error')): ?>
                <div class="message error">
                    <i class="fas fa-exclamation-circle"></i> <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <?php if(session('success')): ?>
                <div class="message success">
                    <i class="fas fa-check-circle"></i> <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="otp-input">
                <input type="text" name="digit1" maxlength="1" required autofocus>
                <input type="text" name="digit2" maxlength="1" required>
                <input type="text" name="digit3" maxlength="1" required>
                <input type="text" name="digit4" maxlength="1" required>
                <input type="text" name="digit5" maxlength="1" required>
                <input type="text" name="digit6" maxlength="1" required>
            </div>

            <button type="submit" class="btn">
                Verify Code <i class="fas fa-arrow-right"></i>
            </button>

            <div class="resend">
                Didn't receive the code? <a href="#">Resend Code</a>
            </div>
        </div>
    </form>

    <?php echo $__env->make('admin.dashboard.verifyScripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/dashboard/verify-otp.blade.php ENDPATH**/ ?>