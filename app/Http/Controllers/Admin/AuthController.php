<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Admin;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.dashboard.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            // ✅ تسجيل الدخول ناجح بالبريد والباسورد
            $admin = Auth::guard('admin')->user();

            // توليد كود 6 أرقام
            $otp = rand(100000, 999999);

            // حفظ الكود ووقت الانتهاء
            $admin->otp_code = $otp;
            $admin->otp_expires_at = Carbon::now()->addMinutes(5);
            $admin->save();

            // إرسال الكود عبر الإيميل
            Mail::raw("رمز التحقق الخاص بك هو: $otp (صالح لمدة 5 دقائق)", function ($message) use ($admin) {
                $message->to($admin->email)
                        ->subject('رمز التحقق (OTP) - MyPortfolio');
            });

            // تسجيل خروج مؤقت إلى حين التحقق
            Auth::guard('admin')->logout();

            session(['otp_email' => $admin->email]);

            return redirect()->route('admin.dashboard.verify.otp.form')
                             ->with('success', 'تم إرسال كود التحقق إلى بريدك الإلكتروني.');
        }

        return back()->with('error', 'Email or Password is incorrect');
    }

    public function showOtpForm()
    {
        return view('admin.dashboard.verify-otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate(['otp' => 'required|digits:6']);

        $email = session('otp_email');
        $admin = Admin::where('email', $email)->first();

        if (!$admin) {
            return redirect()->route('admin.dashboard.login')->with('error', 'Session expired, please login again.');
        }

        if ($admin->otp_code == $request->otp && $admin->otp_expires_at > now()) {
            // نجاح ✅
            $admin->otp_code = null;
            $admin->otp_expires_at = null;
            $admin->save();

            Auth::guard('admin')->login($admin);
            return redirect()->route('admin.dashboard.dashboard')->with('success', 'تم تسجيل الدخول بنجاح');
        }

        return back()->with('error', 'رمز التحقق غير صحيح أو منتهي الصلاحية.');
    }

    public function dashboard()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard.login');
        }

        return view('admin.dashboard.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.dashboard.login');
    }
}
