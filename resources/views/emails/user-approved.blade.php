<x-email-layout heading="Your enquiry has been received" :title="'Enquiry #'.str_pad($contact->id, 5, '0', STR_PAD_LEFT).' — INN Group'">
    <p style="margin:0 0 16px;font-size:16px;line-height:1.6;color:#0f172a;">
        Dear {{ $contact->name }},
    </p>

    <p style="margin:0 0 16px;font-size:15px;line-height:1.7;color:#334155;">
        Thank you for contacting <strong>{{ $contact->sourceDomainLabel() }}</strong>. This email confirms that we have received and acknowledged your enquiry
        <strong>(reference #{{ str_pad($contact->id, 5, '0', STR_PAD_LEFT) }})</strong>.
    </p>

    <p style="margin:0 0 20px;font-size:15px;line-height:1.7;color:#334155;">
        A team member will review your message and respond using the contact details you provided. You do not need to resubmit the form.
    </p>

    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border:1px solid #e2e8f0;border-radius:8px;margin-bottom:24px;">
        <tr>
            <td style="padding:16px 20px;font-size:14px;line-height:1.6;color:#475569;">
                <p style="margin:0 0 6px;"><strong>Submitted:</strong> {{ $contact->created_at->timezone(config('app.timezone'))->format('d M Y, g:i A T') }}</p>
                @if ($contact->approved_at)
                    <p style="margin:0;"><strong>Acknowledged:</strong> {{ $contact->approved_at->timezone(config('app.timezone'))->format('d M Y, g:i A T') }}</p>
                @endif
            </td>
        </tr>
    </table>

    <p style="margin:0 0 8px;font-size:14px;font-weight:600;color:#0f172a;">Questions?</p>
    <p style="margin:0 0 4px;font-size:14px;color:#475569;">
        Reply to this email or write to
        <a href="mailto:{{ config('mail.support_address') }}" style="color:#115e59;text-decoration:none;">{{ config('mail.support_address') }}</a>
    </p>
    <p style="margin:0;font-size:14px;color:#475569;">Phone: {{ config('mail.support_phone') }}</p>

    <p style="margin:24px 0 0;font-size:14px;line-height:1.6;color:#64748b;">
        Warm regards,<br>
        <strong style="color:#0f172a;">The INN Group Team</strong>
    </p>
</x-email-layout>
