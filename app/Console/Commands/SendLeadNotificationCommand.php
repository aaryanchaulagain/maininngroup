<?php

namespace App\Console\Commands;

use App\Models\Contact;
use App\Services\LeadMailService;
use Illuminate\Console\Command;

class SendLeadNotificationCommand extends Command
{
    protected $signature = 'inn:send-lead-notification {contact : Contact ID}';

    protected $description = 'Send admin email for a contact lead (background worker)';

    public function handle(LeadMailService $mailService): int
    {
        $contact = Contact::find($this->argument('contact'));

        if (! $contact) {
            $this->error('Contact not found.');

            return self::FAILURE;
        }

        $mailService->sendAdminLeadNotification($contact, immediate: true);

        return self::SUCCESS;
    }
}
