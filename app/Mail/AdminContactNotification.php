<?php

namespace App\Mail;

use App\Mail\Concerns\UsesTransactionalMail;
use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminContactNotification extends Mailable
{
    use Queueable, SerializesModels, UsesTransactionalMail;

    public function __construct(public Contact $contact)
    {
    }

    public function envelope(): Envelope
    {
        $ref = str_pad((string) $this->contact->id, 5, '0', STR_PAD_LEFT);

        return new Envelope(
            subject: "New enquiry #{$ref} — {$this->contact->name} ({$this->contact->sourceDomainLabel()})",
            replyTo: [
                new Address($this->contact->email, $this->contact->name),
            ],
            using: [
                fn ($message) => $this->applyTransactionalHeaders($message, $this->contact),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.admin-contact',
            text: 'emails.admin-contact-text',
        );
    }
}
