<x-email-layout heading="New lead submitted">
    <p style="margin:0 0 20px;font-size:15px;line-height:1.6;color:#475569;">
        A new enquiry has been received via the website. Review the details below and approve the lead from the admin dashboard when ready.
    </p>

    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border:1px solid #e2e8f0;border-radius:8px;overflow:hidden;margin-bottom:24px;">
        <tr>
            <td style="padding:12px 16px;background-color:#f8fafc;font-size:12px;font-weight:600;color:#64748b;width:140px;">Name</td>
            <td style="padding:12px 16px;font-size:14px;color:#0f172a;">{{ $contact->name }}</td>
        </tr>
        <tr>
            <td style="padding:12px 16px;background-color:#f8fafc;font-size:12px;font-weight:600;color:#64748b;border-top:1px solid #e2e8f0;">Email</td>
            <td style="padding:12px 16px;font-size:14px;color:#0f172a;border-top:1px solid #e2e8f0;">
                <a href="mailto:{{ $contact->email }}" style="color:#0d9488;text-decoration:none;">{{ $contact->email }}</a>
            </td>
        </tr>
        <tr>
            <td style="padding:12px 16px;background-color:#f8fafc;font-size:12px;font-weight:600;color:#64748b;border-top:1px solid #e2e8f0;">Phone</td>
            <td style="padding:12px 16px;font-size:14px;color:#0f172a;border-top:1px solid #e2e8f0;">{{ $contact->phone ?: '—' }}</td>
        </tr>
        <tr>
            <td style="padding:12px 16px;background-color:#f8fafc;font-size:12px;font-weight:600;color:#64748b;border-top:1px solid #e2e8f0;">Source</td>
            <td style="padding:12px 16px;font-size:14px;color:#0f172a;border-top:1px solid #e2e8f0;">{{ $contact->sourceDomainLabel() }}</td>
        </tr>
        <tr>
            <td style="padding:12px 16px;background-color:#f8fafc;font-size:12px;font-weight:600;color:#64748b;border-top:1px solid #e2e8f0;">Submitted</td>
            <td style="padding:12px 16px;font-size:14px;color:#0f172a;border-top:1px solid #e2e8f0;">
                {{ $contact->created_at->timezone(config('app.timezone'))->format('d M Y, g:i A T') }}
            </td>
        </tr>
    </table>

    <p style="margin:0 0 8px;font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:0.08em;color:#64748b;">Message</p>
    <div style="padding:16px;background-color:#f8fafc;border-radius:8px;border:1px solid #e2e8f0;font-size:14px;line-height:1.7;color:#334155;white-space:pre-wrap;">{{ $contact->message }}</div>

    <p style="margin:24px 0 0;text-align:center;">
        <a href="{{ admin_contact_show_url($contact) }}" style="display:inline-block;padding:12px 24px;background-color:#0d9488;color:#ffffff;font-size:14px;font-weight:600;text-decoration:none;border-radius:8px;">
            View in admin dashboard
        </a>
    </p>
</x-email-layout>
