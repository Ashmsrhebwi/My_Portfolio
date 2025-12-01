<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HeroController;
// use App\Http\Controllers\Admin\WorkController;
use App\Models\Hero;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\ContactController;

// Landing page
Route::get('/', function () {
    $hero = Hero::first();
    return view('frontend.landing', compact('hero'));
});
Route::get('/', [HomeController::class, 'index'])->name('home');


// Admin routes
Route::prefix('admin')->group(function () {

    // Authentication
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    // OTP Verification
    Route::get('/verify-otp', [AuthController::class, 'showOtpForm'])->name('admin.verify.otp.form');
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('admin.verify.otp');

    // Dashboard
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');

    // HERO management
    Route::get('/hero/edit', [HeroController::class, 'edit'])->name('admin.hero.edit');
    Route::post('/hero/update', [HeroController::class, 'update'])->name('admin.hero.update');

    // Download CV
    Route::get('/hero/download-cv/{file}', [HeroController::class, 'downloadCv'])->name('hero.downloadCv');

    Route::get('/statistics', [\App\Http\Controllers\Admin\StatisticController::class, 'index'])->name('admin.statistics.index');
    Route::get('/statistics/create', [\App\Http\Controllers\Admin\StatisticController::class, 'create'])->name('admin.statistics.create');
    Route::post('/statistics', [\App\Http\Controllers\Admin\StatisticController::class, 'store'])->name('admin.statistics.store');
    Route::get('/statistics/{id}/edit', [\App\Http\Controllers\Admin\StatisticController::class, 'edit'])->name('admin.statistics.edit');
    Route::put('/statistics/{id}', [\App\Http\Controllers\Admin\StatisticController::class, 'update'])->name('admin.statistics.update');
    Route::delete('/statistics/{id}', [\App\Http\Controllers\Admin\StatisticController::class, 'destroy'])->name('admin.statistics.delete');

    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class)->names([
        'index' => 'admin.services.index',
        'create' => 'admin.services.create',
        'store' => 'admin.services.store',
        'edit' => 'admin.services.edit',
        'update' => 'admin.services.update',
        'destroy' => 'admin.services.destroy',
    ]);
    Route::resource('works', \App\Http\Controllers\Admin\WorkController::class)->names([
        'index' => 'admin.works.index',
        'create' => 'admin.works.create',
        'store' => 'admin.works.store',
        'edit' => 'admin.works.edit',
        'update' => 'admin.works.update',
        'destroy' => 'admin.works.destroy',
    ]);
    
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});
