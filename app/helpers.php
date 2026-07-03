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

if (! function_exists('legacy_asset')) {
    /** Local vendor URL for a mirrored legacy asset (themes, plugins, uploads). */
    function legacy_asset(string $site, string $path, ?string $version = null): string
    {
        return \App\Support\LegacyAsset::url($site, $path, $version);
    }
}

if (! function_exists('legacy_uploads')) {
    /** Base URL for mirrored uploads (append /year/month/file.ext). */
    function legacy_uploads(string $site): string
    {
        return \App\Support\LegacyAsset::uploads($site);
    }
}

if (! function_exists('legacy_wp_include')) {
    /** Local URL for mirrored wp-includes assets (jQuery, etc.). */
    function legacy_wp_include(string $path, ?string $version = null): string
    {
        return \App\Support\LegacyAsset::wpInclude($path, $version);
    }
}

if (! function_exists('legacy_external')) {
    /** @deprecated Use site_image() — legacy mirror only */
    function legacy_external(string $key, string $path, ?string $version = null): string
    {
        return \App\Support\LegacyAsset::external($key, $path, $version);
    }
}

if (! function_exists('vendored_asset')) {
    /** URL for a file under public/vendor/{site}/ */
    function vendored_asset(string $site, string $path): string
    {
        $path = ltrim(str_replace('\\', '/', $path), '/');
        $full = public_path('vendor/'.$site.'/'.$path);
        $url = asset('vendor/'.$site.'/'.$path);

        return is_file($full) ? $url.'?v='.filemtime($full) : $url;
    }
}

if (! function_exists('site_uploads')) {
    /** Base URL for site images — prefers public/vendor/{site}/uploads, then assets/images/{site}. */
    function site_uploads(string $site): string
    {
        if (is_dir(public_path('vendor/'.$site.'/uploads'))) {
            return vendored_asset($site, 'uploads');
        }

        return asset('assets/images/'.$site);
    }
}

if (! function_exists('site_image')) {
    /** Local image URL — checks assets/images then vendor/uploads. */
    function site_image(string $site, string $path): string
    {
        $path = ltrim(str_replace('\\', '/', $path), '/');

        foreach ([
            'assets/images/'.$site.'/'.$path,
            'vendor/'.$site.'/uploads/'.$path,
        ] as $rel) {
            $full = public_path($rel);

            if (is_file($full)) {
                return asset($rel).'?v='.filemtime($full);
            }
        }

        return asset('assets/images/'.$site.'/'.$path);
    }
}

if (! function_exists('storage_url')) {
    /**
     * Public URL for admin uploads (storage/app/public).
     * Uses a root-relative path so images work on any domain (inngroup.test, subsites, etc.).
     */
    function storage_url(?string $path): ?string
    {
        if ($path === null || $path === '') {
            return null;
        }

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        return '/storage/'.ltrim(str_replace('\\', '/', $path), '/');
    }
}

if (! function_exists('main_logo_url')) {
    function main_logo_url(): string
    {
        foreach ([
            'assets/images/logo.png',
            'assets/images/main/inngroup-logo.png',
            'assets/images/main/inngroup-logo.jpg',
            'assets/images/main/logo.png',
        ] as $rel) {
            $path = public_path($rel);

            if (is_file($path)) {
                return asset($rel).'?v='.filemtime($path);
            }
        }

        foreach (['inngroup-logo.png', 'inngroup-logo.jpg'] as $file) {
            $path = public_path('assets/images/main/'.$file);

            if (is_file($path)) {
                return asset('assets/images/main/'.$file).'?v='.filemtime($path);
            }
        }

        foreach (['uploads/2021/01/innovative-group-011-300x89.jpg'] as $vendorPath) {
            $full = public_path('vendor/main/'.$vendorPath);

            if (is_file($full)) {
                return vendored_asset('main', $vendorPath);
            }
        }

        return asset('assets/images/innovativetax-logo.png');
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
