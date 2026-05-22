<?php

namespace App\Mail\Concerns;

use App\Models\Contact;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Symfony\Component\Mime\Email;

trait UsesTransactionalMail
{
    protected function transactionalEnvelope(
        Contact $contact,
        string $subject,
        bool $replyToSupport = true,
    ): Envelope {
        $replyTo = $replyToSupport
            ? [new Address(
                (string) config('mail.support_address'),
                (string) config('mail.from.name')
            )]
            : [];

        return new Envelope(
            subject: $subject,
            replyTo: $replyTo,
            using: [
                fn (Email $message) => $this->applyTransactionalHeaders($message, $contact),
            ],
        );
    }

    protected function applyTransactionalHeaders(Email $message, Contact $contact): void
    {
        $headers = $message->getHeaders();
        $headers->addTextHeader('X-Entity-Ref-ID', 'inn-contact-'.$contact->id);
        $headers->addTextHeader('X-Auto-Response-Suppress', 'OOF, AutoReply');
    }
}
