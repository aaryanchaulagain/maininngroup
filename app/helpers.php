<?php

if (! function_exists('domain_routing_enabled')) {
    /**
     * Domain-based routing for production subdomains.
     * Path-based fallback for 127.0.0.1 / localhost (php artisan serve).
     */
    function domain_routing_enabled(): bool
    {
        $configured = config('domains.routing');

        if ($configured !== null && $configured !== '') {
            return filter_var($configured, FILTER_VALIDATE_BOOLEAN);
        }

        // Web request: use the host the browser actually sent
        if (! empty($_SERVER['HTTP_HOST'])) {
            $host = strtolower(explode(':', $_SERVER['HTTP_HOST'])[0]);

            return ! in_array($host, ['localhost', '127.0.0.1', '::1'], true);
        }

        // CLI (route:list, etc.) — default to path-based in local env
        if (function_exists('app') && app()->environment('local')) {
            return false;
        }

        return true;
    }
}

if (! function_exists('domain_path_prefix')) {
    /** URL path segment for a site when using path-based routing (e.g. innovativetax). */
    function domain_path_prefix(string $domainKey): string
    {
        return (string) config("domains.paths.{$domainKey}", $domainKey);
    }
}

if (! function_exists('domain_url')) {
    function domain_url(string $domainKey, string $path = '/'): string
    {
        if (! domain_routing_enabled()) {
            $prefix = match ($domainKey) {
                'tax', 'loan', 'advisory' => domain_path_prefix($domainKey),
                default => '',
            };

            $base = $prefix === '' ? '' : '/'.$prefix;

            return url(rtrim($base, '/').'/'.ltrim($path, '/'));
        }

        $host = config("domains.{$domainKey}");
        $scheme = str_starts_with((string) config('app.url'), 'https') ? 'https' : 'http';

        return rtrim("{$scheme}://{$host}", '/').'/'.ltrim($path, '/');
    }
}

if (! function_exists('tax_logo_url')) {
    /** Public URL for the Innovative Tax logo (cache-busted when the file exists). */
    function tax_logo_url(): string
    {
        $path = public_path('assets/images/innovativetax-logo.png');

        if (! is_file($path)) {
            return asset('assets/images/innovativetax-logo.png');
        }

        return asset('assets/images/innovativetax-logo.png').'?v='.filemtime($path);
    }
}

if (! function_exists('advisory_logo_url')) {
    /** Public URL for the Innovative Advisory logo (cache-busted when the file exists). */
    function advisory_logo_url(): string
    {
        $path = public_path('assets/images/innovativeadvisory-logo.png');

        if (! is_file($path)) {
            return asset('assets/images/innovativeadvisory-logo.png');
        }

        return asset('assets/images/innovativeadvisory-logo.png').'?v='.filemtime($path);
    }
}

if (! function_exists('loan_logo_url')) {
    /** Public URL for the Innovative Finance logo (cache-busted when the file exists). */
    function loan_logo_url(): string
    {
        $path = public_path('assets/images/innovativefinance-logo.png');

        if (! is_file($path)) {
            return asset('assets/images/innovativefinance-logo.png');
        }

        return asset('assets/images/innovativefinance-logo.png').'?v='.filemtime($path);
    }
}

if (! function_exists('current_domain_key')) {
    function current_domain_key(): string
    {
        if (! domain_routing_enabled()) {
            $segment = request()->segment(1);

            return match ($segment) {
                domain_path_prefix('tax') => 'tax',
                domain_path_prefix('loan') => 'loan',
                domain_path_prefix('advisory') => 'advisory',
                default => 'main',
            };
        }

        $host = request()->getHost();

        return match ($host) {
            config('domains.tax') => 'tax',
            config('domains.loan') => 'loan',
            config('domains.advisory') => 'advisory',
            default => 'main',
        };
    }
}

if (! function_exists('admin_site_key')) {
    function admin_site_key(): ?string
    {
        return request()->attributes->get('admin_site');
    }
}

if (! function_exists('admin_route_name')) {
    /** Resolve a short nav route suffix to a full Laravel route name. */
    function admin_route_name(string $suffix, ?string $site = null): string
    {
        $site ??= admin_site_key();

        if ($site === null) {
            return "admin.{$suffix}";
        }

        if (str_starts_with($suffix, 'advisory.')) {
            return "admin.{$suffix}";
        }

        return "admin.{$site}.{$suffix}";
    }
}

if (! function_exists('admin_route')) {
    function admin_route(string $suffix, mixed $parameters = [], bool $absolute = true): string
    {
        return route(admin_route_name($suffix), $parameters, $absolute);
    }
}

if (! function_exists('admin_contact_show_url')) {
    /** Admin lead detail URL for a contact (correct site-scoped route). */
    function admin_contact_show_url(\App\Models\Contact $contact, bool $absolute = true): string
    {
        $site = $contact->source_domain;

        if (! filled($site) || ! array_key_exists($site, admin_sites())) {
            $site = 'main';
        }

        return route(admin_route_name('contacts.show', $site), $contact, $absolute);
    }
}

if (! function_exists('admin_sites')) {
    /** @return array<string, array<string, mixed>> */
    function admin_sites(): array
    {
        return config('admin_sites', []);
    }
}
