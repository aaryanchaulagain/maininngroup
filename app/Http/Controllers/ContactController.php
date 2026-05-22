<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Services\LeadMailService;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function __construct(
        protected LeadMailService $mailService
    ) {}

    public function store(ContactRequest $request): RedirectResponse
    {
        $contact = Contact::create([
            ...$request->sanitizedPayload(),
            'status' => Contact::STATUS_PENDING,
        ]);

        $this->mailService->sendAdminLeadNotification($contact);

        $message = match ($request->input('source_domain')) {
            'loan' => 'Thank you for your message. It has been sent.',
            'tax' => 'Your form has been submitted. Our team will be in touch shortly.',
            default => 'Your form has been submitted. Our team will be in touch shortly.',
        };

        return back()->with('success', $message);
    }
}
