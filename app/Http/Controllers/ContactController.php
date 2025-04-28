<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormSubmitted;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store(ContactRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        Contact::create($validatedData);

        // Ensure MAIL_FROM_ADDRESS is set in .env or config/mail.php
        $recipient = config('mail.from.address');
        if ($recipient) {
            Mail::to($recipient)->send(new ContactFormSubmitted($validatedData));
        }

        return back()->with('success', 'Your message has been sent successfully!');
    }
} 