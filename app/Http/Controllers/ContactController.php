<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageCopyMail;
use App\Notifications\ContactFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

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

        Notification::route('mail', config('mail.from.address'))
            ->notify(new ContactFormNotification($validatedData));

        if (!empty($validatedData['email'])) {
            Mail::to($validatedData['email'])->send(new ContactMessageCopyMail($validatedData));
        }
        return redirect()->back()->with('success', __('contact.form_fields.submit'));

    }
}
