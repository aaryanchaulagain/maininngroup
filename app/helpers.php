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
                'tax', 'loan' => domain_path_prefix($domainKey),
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

if (! function_exists('current_domain_key')) {
    function current_domain_key(): string
    {
        if (! domain_routing_enabled()) {
            $segment = request()->segment(1);

            return match ($segment) {
                domain_path_prefix('tax') => 'tax',
                domain_path_prefix('loan') => 'loan',
                default => 'main',
            };
        }

        $host = request()->getHost();

        return match ($host) {
            config('domains.tax') => 'tax',
            config('domains.loan') => 'loan',
            default => 'main',
        };
    }
}
