<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    // عرض نموذج التعديل
    public function edit() 
    {
        $hero = Hero::first();

        if (!$hero) {
            $hero = Hero::create([
                'name' => 'Your Name',
                'role' => 'Full Stack Developer',
                'bio' => '',
                'profile_image' => '',
                'cv_file' => '',
                'open_to_work' => 0,
            ]);
        }

        return view('admin.hero.edit', compact('hero'));
    }

    // حفظ التعديلات
    public function update(Request $request)
    { 
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'cv_file' => 'nullable|file|mimes:pdf,doc,docx|max:4096',
        ]);

        $hero = Hero::first() ?? new Hero();

        // حفظ البيانات النصية
        $hero->fill($request->except(['profile_image', 'cv_file']));

        // حفظ الصورة إذا كانت موجودة
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $path = $file->store('uploads/hero', 'public');
            $hero->profile_image = $path;
        }

        // حفظ CV إذا كان موجود
        if ($request->hasFile('cv_file')) {
            $cvName = 'Shahm Sardini Cv .' . time() . '.' . $request->cv_file->extension();
            $request->cv_file->storeAs('public/cv', $cvName);
            $hero->cv_file = $cvName;
        }

        // checkbox open_to_work
        $hero->open_to_work = $request->has('open_to_work') ? 1 : 0;

        $hero->save();

        return redirect()
            ->route('admin.hero.edit')
            ->with('success', 'Hero Section Updated Successfully.');
    }

    // تحميل CV
    public function downloadCv($file)
    {
        $path = 'public/cv/' . $file; // نفس مكان التخزين

        if (!Storage::exists($path)) {
            abort(404);
        }

        return Storage::download($path);
    }
}
