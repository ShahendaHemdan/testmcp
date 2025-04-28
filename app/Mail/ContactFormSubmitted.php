<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The form data.
     *
     * @var array<string, mixed>
     */
    public array $formData;

    /**
     * Create a new message instance.
     *
     * @param array<string, mixed> $formData
     */
    public function __construct(array $formData)
    {
        $this->formData = $formData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: $this->formData['email'], // Set the "from" address to the submitter's email
            replyTo: $this->formData['email'], // Set reply-to for convenience
            subject: 'New Contact Form Submission',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact.submitted',
            with: [
                'name' => $this->formData['name'],
                'email' => $this->formData['email'],
                'messageContent' => $this->formData['message'], // Use a different variable name
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
} 