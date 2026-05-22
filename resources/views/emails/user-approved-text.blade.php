Dear {{ $contact->name }},

Thank you for contacting {{ $contact->sourceDomainLabel() }}.

We have reviewed and acknowledged your enquiry (reference #{{ str_pad($contact->id, 5, '0', STR_PAD_LEFT) }}).

A member of our team will be in touch with you shortly.

Submitted: {{ $contact->created_at->timezone(config('app.timezone'))->format('d M Y') }}
@if ($contact->approved_at)
Acknowledged: {{ $contact->approved_at->timezone(config('app.timezone'))->format('d M Y, g:i A T') }}
@endif

If you need help sooner, reply to this email or contact us:
Email: {{ config('mail.support_address') }}
Phone: {{ config('mail.support_phone') }}

Warm regards,
The INN Group Team
{{ config('mail.company.website') }}

---
This message was sent because you submitted a contact form on our website.
{{ config('mail.company.legal_name') }}
{{ config('mail.company.address') }}
