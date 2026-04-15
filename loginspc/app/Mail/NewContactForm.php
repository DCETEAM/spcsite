<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $formData; // Public property to hold data passed to the view

    /**
     * Create a new message instance.
     */
    public function __construct($formData)
    {
        $this->formData = $formData; // Store the data
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        // Define the subject line for the email
        return new Envelope(
            subject: 'New Contact Form Submission',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // Define the Blade view file that contains the email's content
        return new Content(
            view: 'emails.contact',
            // Pass the public property to the view automatically
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return []; // Add file paths here if you need attachments
    }
}