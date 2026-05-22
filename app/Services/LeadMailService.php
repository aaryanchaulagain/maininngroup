<?php

namespace App\Services;

use App\Jobs\SendAdminLeadNotification;
use App\Jobs\SendUserApprovalEmail;
use App\Mail\AdminContactNotification;
use App\Mail\UserApprovalNotification;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Process;
use Throwable;

class LeadMailService
{
    public function sendAdminLeadNotification(Contact $contact, bool $immediate = false): void
    {
        $recipient = config('mail.admin_notification_address');

        if (empty($recipient)) {
            Log::warning('Admin notification skipped: ADMIN_NOTIFICATION_EMAIL is not set.');

            return;
        }

        if ($immediate) {
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

        $this->notifyAdminInBackground($contact);
    }

    /** Runs SMTP in a separate process so contact forms respond immediately. */
    public function notifyAdminInBackground(Contact $contact): void
    {
        try {
            Process::path(base_path())->start([
                PHP_BINARY,
                base_path('artisan'),
                'inn:send-lead-notification',
                (string) $contact->id,
            ]);

            Log::info('Admin lead notification started in background.', [
                'contact_id' => $contact->id,
            ]);
        } catch (Throwable $e) {
            Log::error('Could not start background lead notification.', [
                'contact_id' => $contact->id,
                'error' => $e->getMessage(),
            ]);
        }
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
        $recipient = $recipient ?? config('mail.admin_notification_address');

        try {
            Mail::to($recipient)->send(new AdminContactNotification($contact));

            Log::info('Admin lead notification sent.', [
                'contact_id' => $contact->id,
                'to' => $recipient,
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

    protected function shouldQueueMail(): bool
    {
        return (bool) config('mail.queue_notifications')
            && config('queue.default') !== 'sync';
    }
}
