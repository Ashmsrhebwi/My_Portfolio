{{-- resources/views/admin/verify.styles.blade.php --}}
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
        direction: ltr;
    }

    .container {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 40px 30px;
        text-align: center;
        width: 100%;
        max-width: 400px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        position: relative;
        overflow: hidden;
    }

    .container::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
        transform: rotate(45deg);
        animation: shine 3s infinite;
    }

    @keyframes shine {
        0% { transform: rotate(45deg) translateX(-100%); }
        100% { transform: rotate(45deg) translateX(100%); }
    }

    .logo {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #00c2ff, #0077ff);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        box-shadow: 0 10px 20px rgba(0, 194, 255, 0.4);
    }

    .logo i {
        font-size: 24px;
        color: white;
    }

    h2 {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 10px;
        background: linear-gradient(135deg, #fff, #00c2ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .subtitle {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 30px;
        font-size: 16px;
        line-height: 1.5;
    }

    .otp-input {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 30px;
    }

    .otp-input input {
        width: 50px;
        height: 60px;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        transition: all 0.3s ease;
    }

    .otp-input input:focus {
        border-color: #00c2ff;
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 20px rgba(0, 194, 255, 0.4);
        outline: none;
        transform: translateY(-2px);
    }

    .otp-input input.filled {
        border-color: #00ff88;
        background: rgba(0, 255, 136, 0.1);
    }

    .btn {
        background: linear-gradient(135deg, #00c2ff, #0077ff);
        color: white;
        border: none;
        padding: 15px 40px;
        font-size: 18px;
        font-weight: 600;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    .btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .btn:hover::before {
        left: 100%;
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(0, 194, 255, 0.4);
    }

    .btn:active {
        transform: translateY(-1px);
    }

    .btn i {
        margin-left: 8px;
    }

    .message {
        padding: 12px;
        border-radius: 10px;
        margin-bottom: 20px;
        font-weight: 500;
        animation: slideIn 0.5s ease;
    }

    .error {
        background: rgba(255, 77, 77, 0.2);
        border: 1px solid rgba(255, 77, 77, 0.5);
        color: #ff4d4d;
    }

    .success {
        background: rgba(0, 255, 136, 0.2);
        border: 1px solid rgba(0, 255, 136, 0.5);
        color: #00ff88;
    }

    .resend {
        margin-top: 20px;
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
    }

    .resend a {
        color: #00c2ff;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .resend a:hover {
        color: #00ff88;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive */
    @media (max-width: 480px) {
        .container {
            padding: 30px 20px;
        }
        
        h2 {
            font-size: 24px;
        }
        
        .otp-input input {
            width: 45px;
            height: 55px;
            font-size: 20px;
        }
        
        .btn {
            padding: 14px 30px;
            font-size: 16px;
        }
    }
</style>