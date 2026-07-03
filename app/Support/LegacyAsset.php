<?php

namespace App\Support;

class LegacyAsset
{
    public static function vendorPath(string $site, string $path): string
    {
        return public_path('vendor/'.trim($site, '/').'/'.ltrim(str_replace('\\', '/', $path), '/'));
    }

    public static function url(string $site, string $path, ?string $version = null): string
    {
        $path = ltrim(str_replace('\\', '/', $path), '/');
        $full = self::vendorPath($site, $path);
        $url = asset('vendor/'.$site.'/'.$path);

        if (is_file($full)) {
            return $url.'?v='.filemtime($full);
        }

        return $version !== null ? $url.'?v='.rawurlencode($version) : $url;
    }

    public static function uploads(string $site): string
    {
        return self::url($site, 'uploads');
    }

    public static function wpInclude(string $path, ?string $version = null): string
    {
        return self::url('shared', 'wp-includes/'.ltrim($path, '/'), $version);
    }

    public static function external(string $key, string $path, ?string $version = null): string
    {
        return self::url('external/'.$key, ltrim($path, '/'), $version);
    }

    /**
     * @return array{site: string, path: string}|null
     */
    public static function resolveLocalPathFromUrl(string $url): ?array
    {
        $url = explode('#', $url, 2)[0];
        $url = explode('?', $url, 2)[0];

        if ($url === '') {
            return null;
        }

        $parsed = parse_url($url);

        if (! is_array($parsed) || empty($parsed['host'])) {
            return null;
        }

        $host = strtolower($parsed['host']);
        $path = ltrim($parsed['path'] ?? '', '/');

        foreach (config('legacy_assets.jetpack_cdn_hosts', []) as $cdnHost) {
            if ($host === $cdnHost && str_contains($path, '/wp-content/')) {
                $path = substr($path, strpos($path, '/wp-content/') + 1);

                return self::resolveWpPath('main', $path);
            }
        }

        foreach (config('legacy_assets.external_origins', []) as $key => $origin) {
            $originHost = parse_url($origin, PHP_URL_HOST);
            $originPath = trim(parse_url($origin, PHP_URL_PATH) ?? '', '/');

            if ($host === strtolower((string) $originHost)) {
                if ($originPath !== '' && str_starts_with($path, $originPath.'/')) {
                    $path = substr($path, strlen($originPath) + 1);
                }

                return ['site' => 'external/'.$key, 'path' => $path];
            }
        }

        foreach (config('legacy_assets.origins', []) as $site => $origin) {
            $originHost = parse_url($origin, PHP_URL_HOST);

            if ($host !== strtolower((string) $originHost)) {
                continue;
            }

            if (str_starts_with($path, 'wp-content/')) {
                return self::resolveWpPath($site, $path);
            }

            if (str_starts_with($path, 'wp-includes/')) {
                return ['site' => 'shared', 'path' => $path];
            }
        }

        return null;
    }

    /**
     * @return array{site: string, path: string}
     */
    private static function resolveWpPath(string $site, string $path): array
    {
        $relative = ltrim(substr($path, strlen('wp-content/')), '/');

        return ['site' => $site, 'path' => $relative];
    }

    /**
     * Build source URLs from legacy_asset() / legacy_wp_include() / legacy_external() calls in templates.
     *
     * @return list<string>
     */
    public static function discoverHelperUrlsInProject(string $basePath): array
    {
        $urls = [];
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($basePath, \FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            if (! $file->isFile() || ! str_ends_with($file->getFilename(), '.php')) {
                continue;
            }

            $contents = file_get_contents($file->getPathname());

            if ($contents === false) {
                continue;
            }

            if (preg_match_all("/legacy_asset\(\s*'([^']+)'\s*,\s*'([^']+)'/", $contents, $matches, PREG_SET_ORDER)) {
                foreach ($matches as $match) {
                    $url = self::helperCallToSourceUrl($match[1], $match[2]);

                    if ($url !== null) {
                        $urls[] = $url;
                    }
                }
            }

            if (preg_match_all("/legacy_wp_include\(\s*'([^']+)'/", $contents, $matches)) {
                foreach ($matches[1] as $path) {
                    $urls[] = self::wpIncludeSourceUrl($path);
                }
            }

            if (preg_match_all("/legacy_external\(\s*'([^']+)'\s*,\s*'([^']+)'/", $contents, $matches, PREG_SET_ORDER)) {
                foreach ($matches as $match) {
                    $origin = config("legacy_assets.external_origins.{$match[1]}");

                    if ($origin) {
                        $urls[] = rtrim($origin, '/').'/'.ltrim($match[2], '/');
                    }
                }
            }

            if (preg_match_all('#\{\{\s*\$cdn\s*\}\}/([^\s"\'}?]+)#', $contents, $matches)) {
                foreach ($matches[1] as $suffix) {
                    foreach (['tax', 'loan'] as $site) {
                        $origin = config("legacy_assets.origins.{$site}");

                        if ($origin) {
                            $urls[] = rtrim($origin, '/').'/wp-content/uploads/'.ltrim($suffix, '/');
                        }
                    }
                }
            }
        }

        return array_values(array_unique($urls));
    }

    public static function helperCallToSourceUrl(string $site, string $path): ?string
    {
        $origin = config("legacy_assets.origins.{$site}");

        if (! $origin) {
            return null;
        }

        return rtrim($origin, '/').'/wp-content/'.ltrim($path, '/');
    }

    public static function wpIncludeSourceUrl(string $path): string
    {
        return 'https://inngroup.com.au/wp-includes/'.ltrim($path, '/');
    }

    public static function vendorPathToSourceUrl(string $vendorPath): ?string
    {
        $vendorPath = '/'.ltrim($vendorPath, '/');

        if (! preg_match('#^/vendor/([^/]+)/(.+)$#', $vendorPath, $match)) {
            return null;
        }

        $site = $match[1];
        $path = $match[2];

        if (str_starts_with($site, 'external/')) {
            $key = substr($site, strlen('external/'));
            $origin = config("legacy_assets.external_origins.{$key}");

            return $origin ? rtrim($origin, '/').'/'.ltrim($path, '/') : null;
        }

        if ($site === 'shared') {
            return 'https://inngroup.com.au/'.ltrim($path, '/');
        }

        $origin = config("legacy_assets.origins.{$site}");

        return $origin ? rtrim($origin, '/').'/wp-content/'.ltrim($path, '/') : null;
    }

    /**
     * @return list<string>
     */
    public static function discoverVendorPathsInCss(string $cssDir): array
    {
        $urls = [];
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($cssDir, \FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            if (! $file->isFile() || ! str_ends_with(strtolower($file->getFilename()), '.css')) {
                continue;
            }

            $contents = file_get_contents($file->getPathname());

            if ($contents === false) {
                continue;
            }

            if (preg_match_all("#url\\((['\"]?)(/vendor/[^)'\"]+)\\1\\)#", $contents, $matches)) {
                foreach ($matches[2] as $vendorPath) {
                    $source = self::vendorPathToSourceUrl($vendorPath);

                    if ($source !== null) {
                        $urls[] = $source;
                    }
                }
            }
        }

        return array_values(array_unique($urls));
    }

    /**
     * @return list<string>
     */
    public static function discoverUrlsInProject(string $basePath): array
    {
        $urls = array_merge(
            self::discoverHelperUrlsInProject($basePath),
            self::discoverHardcodedUrlsInProject($basePath)
        );

        return array_values(array_unique($urls));
    }

    /**
     * @return list<string>
     */
    public static function discoverHardcodedUrlsInProject(string $basePath): array
    {
        $urls = [];
        $pattern = '#https?://[^\s"\'\)]+(?:wp-content|wp-includes)/[^\s"\'\)]+#i';

        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($basePath, \FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            if (! $file->isFile()) {
                continue;
            }

            $pathname = str_replace('\\', '/', $file->getPathname());

            if (! preg_match('/\.(blade\.php|php|css|js|json)$/i', $pathname)) {
                continue;
            }

            if (str_contains($pathname, '/vendor/') || str_contains($pathname, '/node_modules/')) {
                continue;
            }

            $contents = file_get_contents($file->getPathname());

            if ($contents === false) {
                continue;
            }

            if (preg_match_all($pattern, $contents, $matches)) {
                foreach ($matches[0] as $match) {
                    $urls[] = rtrim($match, '.,;');
                }
            }
        }

        return array_values(array_unique($urls));
    }
}
