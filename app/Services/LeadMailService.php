<?php

namespace App\Services;

use App\Jobs\SendAdminLeadNotification;
use App\Jobs\SendUserApprovalEmail;
use App\Mail\AdminContactNotification;
use App\Mail\UserApprovalNotification;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class LeadMailService
{
    public function sendAdminLeadNotification(Contact $contact, bool $immediate = false): void
    {
        $recipient = $this->adminRecipientFor($contact);

        if (empty($recipient)) {
            Log::warning('Admin notification skipped: no admin notification address configured.', [
                'contact_id' => $contact->id,
                'source_domain' => $contact->source_domain,
            ]);

            return;
        }

        $sendNow = $immediate || (bool) config('mail.send_admin_immediately', true);

        if ($sendNow) {
            $this->deliverAdminNotification($contact, $recipient);

            return;
        }

        if ($this->shouldQueueMail()) {
            SendAdminLeadNotification::dispatch($contact);

            Log::info('Admin lead notification queued.', [
                'contact_id' => $contact->id,
                'to' => $recipient,
            ]);

            return;
        }

        $this->scheduleAdminNotificationAfterResponse($contact, $recipient);
    }

    public function sendUserApprovalNotification(Contact $contact, bool $immediate = false): void
    {
        if (empty($contact->email)) {
            Log::warning('User approval email skipped: contact has no email.', [
                'contact_id' => $contact->id,
            ]);

            return;
        }

        if ($immediate) {
            $this->deliverUserApproval($contact);

            return;
        }

        if ($this->shouldQueueMail()) {
            SendUserApprovalEmail::dispatch($contact);

            Log::info('User approval email queued.', [
                'contact_id' => $contact->id,
                'to' => $contact->email,
            ]);

            return;
        }

        dispatch(function () use ($contact) {
            app(LeadMailService::class)->deliverUserApproval($contact);
        })->afterResponse();

        Log::info('User approval email scheduled after HTTP response.', [
            'contact_id' => $contact->id,
            'to' => $contact->email,
        ]);
    }

    public function deliverAdminNotification(Contact $contact, ?string $recipient = null): void
    {
        $recipient = $recipient ?? $this->adminRecipientFor($contact);

        if (empty($recipient)) {
            Log::warning('Admin notification skipped: empty recipient.', [
                'contact_id' => $contact->id,
            ]);

            return;
        }

        try {
            Mail::to($recipient)->send(new AdminContactNotification($contact));

            Log::info('Admin lead notification sent.', [
                'contact_id' => $contact->id,
                'to' => $recipient,
                'source_domain' => $contact->source_domain,
                'mailer' => config('mail.default'),
            ]);
        } catch (Throwable $e) {
            Log::error('Admin lead notification failed.', [
                'contact_id' => $contact->id,
                'to' => $recipient,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function deliverUserApproval(Contact $contact): void
    {
        try {
            Mail::to($contact->email)->send(new UserApprovalNotification($contact));

            Log::info('User approval email sent.', [
                'contact_id' => $contact->id,
                'to' => $contact->email,
                'mailer' => config('mail.default'),
            ]);
        } catch (Throwable $e) {
            Log::error('User approval email failed.', [
                'contact_id' => $contact->id,
                'to' => $contact->email,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    protected function adminRecipientFor(Contact $contact): ?string
    {
        $address = config('mail.admin_notification_address');

        return filled($address) ? trim((string) $address) : null;
    }

    protected function scheduleAdminNotificationAfterResponse(Contact $contact, string $recipient): void
    {
        dispatch(function () use ($contact, $recipient) {
            app(LeadMailService::class)->deliverAdminNotification($contact, $recipient);
        })->afterResponse();

        Log::info('Admin lead notification scheduled after HTTP response.', [
            'contact_id' => $contact->id,
            'to' => $recipient,
        ]);
    }

    protected function shouldQueueMail(): bool
    {
        return (bool) config('mail.queue_notifications')
            && config('queue.default') !== 'sync';
    }
}
