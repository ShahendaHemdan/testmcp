<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the contact form page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Store a new contact form submission
     *
     * @param \App\Http\Requests\ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContactRequest $request)
    {
        $validated = $request->validated();
        
        // Send email notification
        try {
            Mail::to(config('mail.from.address'))
                ->send(new ContactFormSubmission($validated));
        } catch (\Exception $e) {
            // Log the error but don't show it to the user
            logger()->error('Failed to send contact email: ' . $e->getMessage());
        }
        
        return redirect()
            ->route('contact.index')
            ->with('success', 'Thank you for your message! We will get back to you soon.');
    }
} 