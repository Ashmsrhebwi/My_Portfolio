<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // عرض جميع المشرفين
    public function index()
    {
        $admins = Admin::all();
        return view('admin.admins.index', compact('admins'));
    }

    // عرض نموذج إنشاء مشرف جديد
    public function create()
    {
        return view('admin.admins.create');
    }

    // حفظ مشرف جديد
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.admins.index')
            ->with('success', 'Admin created successfully');
    }

    // عرض نموذج تعديل مشرف
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.admins.edit', compact('admin'));
    }

    // تحديث بيانات المشرف
    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:admins,email,' . $id,
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $admin->update($data);

        return redirect()->route('admin.admins.index')
            ->with('success', 'Admin updated successfully');
    }

    // حذف مشرف
    public function destroy($id)
    {
        if ($id == auth()->guard('admin')->id()) {
            return redirect()->route('admin.admins.index')
                ->with('error', 'You cannot delete your own account!');
        }

        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.admins.index')
            ->with('success', 'Admin deleted successfully');
    }
}