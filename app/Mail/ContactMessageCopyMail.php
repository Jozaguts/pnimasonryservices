<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageCopyMail extends Mailable
{
    use Queueable, SerializesModels;
    public array $data;
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Message Copy',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-message-copy',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
