<?php

namespace App\Providers;

use App\Models\Contact;
use App\Policies\ContactPolicy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Gate::policy(Contact::class, ContactPolicy::class);

        Paginator::defaultView('components.admin.pagination');

        if ($this->app->environment('local')) {
            // Process mail jobs immediately (no separate queue:work needed locally)
            if (in_array(config('queue.default'), ['database', 'redis'], true)) {
                config(['queue.default' => 'sync']);
            }

            // SMTP selected but credentials missing → log emails instead of failing silently
            if (config('mail.default') === 'smtp' && empty(config('mail.mailers.smtp.username'))) {
                config(['mail.default' => 'log']);
            }
        }
    }
}
