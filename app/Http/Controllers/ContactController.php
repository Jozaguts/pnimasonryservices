<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $validatedData = $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'full_name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        logger('Contact form submitted', [$validatedData]);
        return redirect()->back()->with('success', __('contact.form_fields.submit'));

    }
}
