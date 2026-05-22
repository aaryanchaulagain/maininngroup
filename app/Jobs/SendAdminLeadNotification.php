<?php

namespace App\Jobs;

use App\Models\Contact;
use App\Services\LeadMailService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class SendAdminLeadNotification implements ShouldQueue
{
    use Queueable;

    public int $tries = 3;

    public function __construct(public Contact $contact)
    {
    }

    public function handle(LeadMailService $mailService): void
    {
        $mailService->deliverAdminNotification($this->contact);
    }

    public function failed(?\Throwable $exception): void
    {
        Log::error('Admin lead notification job failed.', [
            'contact_id' => $this->contact->id,
            'error' => $exception?->getMessage(),
        ]);
    }
}
