<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use App\Models\Statistic;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $statistics = Statistic::orderBy('order')->get();

        // إذا ما في hero، أنشئ object فارغ بجميع الخصائص المطلوبة
        if (!$hero) {
            $hero = (object)[
                'profile_image' => null,
                'name' => 'Your Name',
                'cv_file' => null,
                'open_to_work' => false,
                'title' => 'Your Title',
                'description' => 'Your description here...',
                // أضف أي خصائps أخرى تحتاجها في الفيو
            ];
        }

        return view('frontend.landing', compact('hero', 'statistics'));
    }
}