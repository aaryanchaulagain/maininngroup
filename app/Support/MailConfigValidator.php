<?php

namespace App\Support;

class MailConfigValidator
{
    /** @return list<string> */
    public static function leadMailIssues(): array
    {
        $issues = [];

        if (empty(config('mail.admin_notification_address'))) {
            $issues[] = 'ADMIN_NOTIFICATION_EMAIL is not set in .env (your inbox for new enquiries).';
        }

        if (config('mail.default') === 'log') {
            $issues[] = 'MAIL_MAILER=log — emails are only saved to storage/logs/laravel.log, not sent to real inboxes.';
        }

        return array_merge($issues, self::smtpIssues());
    }

    /** @return list<string> */
    public static function deliverabilityTips(): array
    {
        $tips = [];

        if (config('mail.default') !== 'smtp') {
            return $tips;
        }

        $from = strtolower((string) config('mail.from.address'));
        $user = strtolower((string) config('mail.mailers.smtp.username'));
        $host = (string) config('mail.mailers.smtp.host');

        if (str_contains($host, 'gmail') && $from !== '' && $user !== '' && $from !== $user) {
            $tips[] = 'Set MAIL_FROM_ADDRESS to the same address as MAIL_USERNAME — Gmail spam filters penalise mismatched From/SMTP login.';
        }

        if (str_ends_with($from, '@gmail.com')) {
            $tips[] = 'Use a company address on your domain (e.g. hello@inngroup.com.au via Google Workspace or Microsoft 365) instead of @gmail.com for client-facing mail.';
            $tips[] = 'Add SPF, DKIM, and DMARC DNS records for your domain — required for reliable inbox delivery.';
        }

        if ($from !== '' && ! str_contains($from, '@')) {
            $tips[] = 'MAIL_FROM_ADDRESS must be a valid email address.';
        }

        return $tips;
    }

    public static function isLeadMailReady(): bool
    {
        return self::leadMailIssues() === [];
    }

    public static function smtpIssues(): array
    {
        if (config('mail.default') !== 'smtp') {
            return [];
        }

        $issues = [];
        $username = (string) config('mail.mailers.smtp.username');
        $password = (string) config('mail.mailers.smtp.password');

        if ($username === '' || $password === '') {
            $issues[] = 'MAIL_USERNAME and MAIL_PASSWORD are empty in .env';
        }

        $placeholderUsers = [
            'your@gmail.com',
            'your-email@gmail.com',
            'you@gmail.com',
            'example@gmail.com',
        ];

        if (in_array(strtolower($username), $placeholderUsers, true)
            || str_contains(strtolower($username), 'your@')
            || str_contains(strtolower($username), 'example.com')) {
            $issues[] = 'MAIL_USERNAME still looks like a placeholder — use your real Gmail address';
        }

        $placeholderPasswords = [
            'password',
            'your-password',
            'your-16-char-app-password',
            'app-password',
        ];

        if (in_array(strtolower($password), $placeholderPasswords, true)) {
            $issues[] = 'MAIL_PASSWORD still looks like a placeholder — use a Gmail App Password (16 chars, no spaces)';
        }

        if ($password !== '' && strlen(str_replace(' ', '', $password)) !== 16 && ! str_contains($password, ' ')) {
            // Gmail app passwords are 16 chars; allow other providers
            if (str_contains(config('mail.mailers.smtp.host', ''), 'gmail')) {
                $issues[] = 'Gmail App Passwords are exactly 16 characters — create one at https://myaccount.google.com/apppasswords';
            }
        }

        if (str_contains($password, ' ')) {
            $issues[] = 'Remove spaces from MAIL_PASSWORD (Gmail app password is 16 characters like: abcdabcdabcdabcd)';
        }

        return $issues;
    }

    public static function formatHelp(): string
    {
        return <<<'HELP'
Gmail setup (required — do NOT use your normal Gmail password):

1. Enable 2-Step Verification: https://myaccount.google.com/security
2. Create App Password: https://myaccount.google.com/apppasswords
   - App: Mail, Device: Windows Computer
   - Copy the 16-character password (e.g. abcd efgh ijkl mnop → use without spaces)
3. Update .env:
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=your.real.email@gmail.com
   MAIL_PASSWORD=abcdefghijklmnop
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS=your.real.email@gmail.com
4. Run: php artisan config:clear
5. Run: php artisan inn:test-mail

Or use MAIL_MAILER=log to preview emails in storage/logs/laravel.log only.

Reduce spam folder placement:
- MAIL_FROM_ADDRESS must match MAIL_USERNAME when using Gmail SMTP
- Prefer hello@yourcompany.com.au (Google Workspace) over personal Gmail
- Add SPF + DKIM + DMARC for your domain in DNS
- Ask recipients to mark the first message as "Not spam"
HELP;
    }
}
