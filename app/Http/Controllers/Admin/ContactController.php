<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // حفظ بيانات الفورم وإرسال الإيميل
    public function store(Request $request)
    {
        // Validate البيانات
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // حفظ البيانات بالـ DB
        $contact = Contact::create($validated);

        // إرسال الإيميل
        Mail::to('shahm.srd@gmail.com')->send(new ContactMail($contact));

        return back()->with('success', 'Message sent successfully!');
    }
}
