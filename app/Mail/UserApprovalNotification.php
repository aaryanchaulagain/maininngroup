<?php

namespace App\Mail;

use App\Mail\Concerns\UsesTransactionalMail;
use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserApprovalNotification extends Mailable
{
    use Queueable, SerializesModels, UsesTransactionalMail;

    public function __construct(public Contact $contact)
    {
    }

    public function envelope(): Envelope
    {
        $ref = str_pad((string) $this->contact->id, 5, '0', STR_PAD_LEFT);
        $firstName = strtok($this->contact->name, ' ') ?: $this->contact->name;

        return $this->transactionalEnvelope(
            $this->contact,
            "{$firstName}, we received your enquiry (ref {$ref}) — {$this->contact->sourceDomainLabel()}",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.user-approved',
            text: 'emails.user-approved-text',
        );
    }
}
