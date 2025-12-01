<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - MyPortfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            overflow: hidden;
            background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
        }

        /* ===== Login Section ===== */
        .login-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        .login-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(0, 194, 255, 0.1), transparent);
            transform: rotate(45deg);
            animation: shine 6s infinite linear;
        }

        @keyframes shine {
            0% { transform: rotate(45deg) translateX(-100%); }
            100% { transform: rotate(45deg) translateX(100%); }
        }

        .login-container {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 50px 45px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 2;
            animation: slideUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #00c2ff, #0077ff);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 15px 30px rgba(0, 194, 255, 0.4);
        }

        .logo-icon i {
            font-size: 28px;
            color: white;
        }

        .logo h1 {
            font-size: 32px;
            font-weight: 700;
            background: linear-gradient(135deg, #fff, #00c2ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .welcome-text {
            text-align: center;
            margin-bottom: 35px;
        }

        .welcome-text h2 {
            font-size: 24px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 8px;
        }

        .welcome-text p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 15px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .input-group {
            position: relative;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.5);
            transition: color 0.3s ease;
        }

        .form-input {
            width: 100%;
            padding: 16px 16px 16px 50px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #00c2ff;
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 4px rgba(0, 194, 255, 0.15);
        }

        .form-input:focus + i {
            color: #00c2ff;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 30px;
        }

        .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            border-radius: 4px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.05);
            cursor: pointer;
        }

        .checkbox-group label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            cursor: pointer;
            user-select: none;
        }

        .btn-login {
            width: 100%;
            background: linear-gradient(135deg, #00c2ff, #0077ff);
            color: white;
            border: none;
            padding: 18px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .btn-login:hover::before {
            left: 100%;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(0, 194, 255, 0.4);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .error-message {
            background: rgba(255, 77, 77, 0.15);
            border: 1px solid rgba(255, 77, 77, 0.3);
            color: #ff4d4d;
            padding: 14px;
            border-radius: 12px;
            margin-bottom: 25px;
            text-align: center;
            font-weight: 500;
            animation: shake 0.5s ease;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        /* ===== Image Section ===== */
        .image-section {
            flex: 1;
            background: url('https://applfy.web.app/Images/WhatsApp%20Image%202023-08-30%20at%206.41.18%20PM.jpeg') center/cover no-repeat;
            position: relative;
            overflow: hidden;
        }

        .image-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 194, 255, 0.2), rgba(106, 90, 205, 0.3));
        }

        .image-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            z-index: 2;
            width: 80%;
        }

        .image-title {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .image-subtitle {
            font-size: 18px;
            opacity: 0.9;
            line-height: 1.6;
        }

        .highlight {
            color: #00c2ff;
            font-weight: 600;
        }

        /* ===== Responsive Design ===== */
        @media (max-width: 1024px) {
            .image-title {
                font-size: 36px;
            }
            
            .image-subtitle {
                font-size: 16px;
            }
        }

        @media (max-width: 900px) {
            body {
                flex-direction: column;
            }
            
            .image-section {
                display: none;
            }
            
            .login-section {
                width: 100%;
                height: 100vh;
            }
            
            .login-container {
                max-width: 400px;
                padding: 40px 35px;
            }
        }

        @media (max-width: 480px) {
            .login-section {
                padding: 20px;
            }
            
            .login-container {
                padding: 35px 25px;
            }
            
            .logo h1 {
                font-size: 28px;
            }
            
            .welcome-text h2 {
                font-size: 22px;
            }
            
            .image-title {
                font-size: 32px;
            }
        }

        /* Floating animation */
        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
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

            <form action="<?php echo e(route('admin.login.submit')); ?>" method="POST" autocomplete="on">
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
</html><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/login.blade.php ENDPATH**/ ?>