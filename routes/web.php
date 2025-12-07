<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AdminController; // ← إضافة هذا السطر
use App\Models\Hero;
    use App\Http\Controllers\Frontend\HomeController;

// Landing page
Route::get('/', function () {
    $hero = Hero::first();
    return view('frontend.landing', compact('hero'));
});
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
// Admin routes
Route::prefix('admin')->group(function () {

    // Authentication
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.dashboard.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.dashboard.login.submit');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.dashboard.logout');

    // OTP Verification
    Route::get('/verify-otp', [AuthController::class, 'showOtpForm'])->name('admin.dashboard.verify.otp.form');
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('admin.dashboard.verify.otp');

    // Dashboard
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard.dashboard');

    // HERO management
    Route::get('/hero/edit', [HeroController::class, 'edit'])->name('admin.hero.edit');
    Route::post('/hero/update', [HeroController::class, 'update'])->name('admin.hero.update');

    // Download CV
    Route::get('/hero/download-cv/{file}', [HeroController::class, 'downloadCv'])->name('hero.downloadCv');

    // Statistics
    Route::get('/statistics', [StatisticController::class, 'index'])->name('admin.statistics.index');
    Route::get('/statistics/create', [StatisticController::class, 'create'])->name('admin.statistics.create');
    Route::post('/statistics', [StatisticController::class, 'store'])->name('admin.statistics.store');
    Route::get('/statistics/{id}/edit', [StatisticController::class, 'edit'])->name('admin.statistics.edit');
    Route::put('/statistics/{id}', [StatisticController::class, 'update'])->name('admin.statistics.update');
    Route::delete('/statistics/{id}', [StatisticController::class, 'destroy'])->name('admin.statistics.delete');

    // Services
    Route::resource('services', ServiceController::class)->names([
        'index' => 'admin.services.index',
        'create' => 'admin.services.create',
        'store' => 'admin.services.store',
        'edit' => 'admin.services.edit',
        'update' => 'admin.services.update',
        'destroy' => 'admin.services.destroy',
    ]);

    // Works
    Route::resource('works', WorkController::class)->names([
        'index' => 'admin.works.index',
        'create' => 'admin.works.create',
        'store' => 'admin.works.store',
        'edit' => 'admin.works.edit',
        'update' => 'admin.works.update',
        'destroy' => 'admin.works.destroy',
    ]);

    // Contact
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    // ========== إضافة مسارات Admins هنا ==========
    Route::prefix('admins')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.admins.index');
        Route::get('/create', [AdminController::class, 'create'])->name('admin.admins.create');
        Route::post('/', [AdminController::class, 'store'])->name('admin.admins.store');
        Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('admin.admins.edit');
        Route::put('/{id}', [AdminController::class, 'update'])->name('admin.admins.update');
        Route::delete('/{id}', [AdminController::class, 'destroy'])->name('admin.admins.destroy');
    });
});