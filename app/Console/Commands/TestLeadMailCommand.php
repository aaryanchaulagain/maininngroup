<?php

namespace App\Console\Commands;

use App\Models\Contact;
use App\Services\LeadMailService;
use App\Support\MailConfigValidator;
use Illuminate\Console\Command;

class TestLeadMailCommand extends Command
{
    protected $signature = 'inn:test-mail {--contact= : Contact ID to use for test content}';

    protected $description = 'Send test admin + user approval emails using current .env mail settings';

    public function handle(LeadMailService $mailService): int
    {
        $this->info('Mailer: '.config('mail.default'));
        $this->info('Queue: '.config('queue.default'));
        $this->info('SMTP user: '.(config('mail.mailers.smtp.username') ?: '(empty)'));
        $this->info('Admin recipient: '.config('mail.admin_notification_address'));
        $this->newLine();

        $issues = MailConfigValidator::smtpIssues();

        if ($issues !== []) {
            $this->error('Mail configuration problems:');
            foreach ($issues as $issue) {
                $this->line('  • '.$issue);
            }
            $this->newLine();
            $this->line(MailConfigValidator::formatHelp());

            return self::FAILURE;
        }

        $contact = $this->option('contact')
            ? Contact::findOrFail($this->option('contact'))
            : Contact::latest()->first();

        if (! $contact) {
            $this->error('No contacts in database. Submit a form first or pass --contact=ID');

            return self::FAILURE;
        }

        $failed = false;

        try {
            $mailService->sendAdminLeadNotification($contact, immediate: true);
            $this->info('Admin notification sent to '.config('mail.admin_notification_address'));
        } catch (\Throwable $e) {
            $failed = true;
            $this->error('Admin notification failed: '.$this->shortError($e));
        }

        try {
            $mailService->sendUserApprovalNotification($contact, immediate: true);
            $this->info('User approval email sent to '.$contact->email);
        } catch (\Throwable $e) {
            $failed = true;
            $this->error('User approval email failed: '.$this->shortError($e));
        }

        if ($failed) {
            $this->newLine();
            $this->line(MailConfigValidator::formatHelp());

            return self::FAILURE;
        }

        if (config('mail.default') === 'log') {
            $this->warn('MAIL_MAILER=log — check storage/logs/laravel.log (not your inbox).');
        }

        return self::SUCCESS;
    }

    protected function shortError(\Throwable $e): string
    {
        $msg = $e->getMessage();

        if (str_contains($msg, '535') || str_contains($msg, 'BadCredentials')) {
            return 'Gmail rejected the login. Use a real Gmail address + App Password (not "your@gmail.com" or your normal password).';
        }

        return strlen($msg) > 200 ? substr($msg, 0, 200).'…' : $msg;
    }
}
