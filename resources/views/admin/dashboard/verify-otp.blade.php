<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Code - MyPortfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @include('admin.dashboard.verifyStyles')
</head>
<body>
    <form method="POST" action="{{ route('admin.dashboard.verify.otp') }}">
        @csrf
        <div class="container">
            <div class="logo">
                <i class="fas fa-shield-alt"></i>
            </div>
            
            <h2>Verification Code</h2>
            <p class="subtitle">Enter the 6-digit code sent to your email</p>

            @if(session('error'))
                <div class="message error">
                    <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="message success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

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

    @include('admin.dashboard.verifyScripts')
</body>
</html>