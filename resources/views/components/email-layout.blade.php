@props(['heading', 'title' => null])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'INN Group' }}</title>
</head>
<body style="margin:0;padding:0;background-color:#f1f5f9;font-family:'Segoe UI',Helvetica,Arial,sans-serif;color:#0f172a;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background-color:#f1f5f9;padding:32px 16px;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" style="max-width:600px;width:100%;background-color:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 4px 24px rgba(15,23,42,0.08);">
                    <tr>
                        <td style="background:linear-gradient(135deg,#0B1220 0%,#115E59 100%);padding:28px 32px;">
                            <p style="margin:0;font-size:11px;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;color:#99f6e4;">INN Group</p>
                            <h1 style="margin:8px 0 0;font-size:22px;font-weight:600;color:#ffffff;">{{ $heading }}</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:32px;">
                            {{ $slot }}
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#f8fafc;padding:20px 32px;border-top:1px solid #e2e8f0;">
                            <p style="margin:0 0 8px;font-size:11px;line-height:1.5;color:#94a3b8;text-align:center;">
                                This is a transactional message about your website enquiry. You are receiving it because you submitted our contact form.
                            </p>
                            <p style="margin:0 0 8px;font-size:12px;color:#64748b;text-align:center;">
                                &copy; {{ date('Y') }} {{ config('mail.company.legal_name') }}
                                &middot; <a href="{{ config('mail.company.website') }}" style="color:#115e59;text-decoration:none;">{{ parse_url(config('mail.company.website'), PHP_URL_HOST) }}</a>
                            </p>
                            <p style="margin:0;font-size:11px;color:#94a3b8;text-align:center;">{{ config('mail.company.address') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
