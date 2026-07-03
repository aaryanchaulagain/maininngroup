<?php

namespace App\Console\Commands;

use App\Support\LegacyAsset;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class MirrorLegacyAssets extends Command
{
    protected $signature = 'legacy:mirror
                            {--force : Re-download files that already exist}
                            {--dry-run : List URLs without downloading}';

    protected $description = 'Download legacy WordPress theme assets into public/vendor for offline hosting';

    public function handle(): int
    {
        $viewsPath = resource_path('views');
        $urls = LegacyAsset::discoverUrlsInProject($viewsPath);
        $urls = array_merge($urls, LegacyAsset::discoverHardcodedUrlsInProject(public_path('assets/css')));
        $urls = array_merge($urls, LegacyAsset::discoverHardcodedUrlsInProject(database_path('seeders')));
        $urls = array_merge($urls, LegacyAsset::discoverVendorPathsInCss(public_path('assets/css')));
        $urls = array_values(array_unique($urls));
        $force = (bool) $this->option('force');
        $dryRun = (bool) $this->option('dry-run');

        $this->info('Found '.count($urls).' legacy asset URL(s) in the project.');

        $downloaded = 0;
        $skipped = 0;
        $failed = 0;

        foreach ($urls as $url) {
            if (str_ends_with(rtrim($url, '/'), '/')) {
                continue;
            }

            $resolved = LegacyAsset::resolveLocalPathFromUrl($url);

            if ($resolved === null) {
                $this->warn("  Skip (unmapped): {$url}");
                $skipped++;

                continue;
            }

            $dest = LegacyAsset::vendorPath($resolved['site'], $resolved['path']);

            if (is_file($dest) && ! $force) {
                $skipped++;

                continue;
            }

            if ($dryRun) {
                $this->line("  Would mirror: {$url}");
                $this->line("           → vendor/{$resolved['site']}/{$resolved['path']}");
                $downloaded++;

                continue;
            }

            $dir = dirname($dest);

            if (! is_dir($dir) && ! mkdir($dir, 0755, true) && ! is_dir($dir)) {
                $this->error("  Failed to create directory: {$dir}");
                $failed++;

                continue;
            }

            try {
                $response = Http::timeout(60)->retry(2, 500)->get($url);

                if (! $response->successful()) {
                    $this->warn("  HTTP {$response->status()}: {$url}");
                    $failed++;

                    continue;
                }

                $body = $response->body();

                if ($body === '') {
                    $this->warn("  Empty response: {$url}");
                    $failed++;

                    continue;
                }

                file_put_contents($dest, $body);
                $this->rewriteCssUrls($dest, $resolved['site']);
                $downloaded++;
            } catch (\Throwable $e) {
                $this->warn("  Error: {$url} — {$e->getMessage()}");
                $failed++;
            }
        }

        $this->newLine();
        $this->info("Done. Downloaded: {$downloaded}, skipped: {$skipped}, failed: {$failed}.");

        if ($failed > 0) {
            $this->comment('Some assets failed — re-run after fixing network access or update templates to remove dead URLs.');
        }

        return $failed > 0 ? self::FAILURE : self::SUCCESS;
    }

    private function rewriteCssUrls(string $filePath, string $site): void
    {
        if (! str_ends_with(strtolower($filePath), '.css')) {
            return;
        }

        $css = file_get_contents($filePath);

        if ($css === false) {
            return;
        }

        $updated = preg_replace_callback(
            '#url\((["\']?)(https?://[^)\'"]+)(["\']?)\)#i',
            function (array $matches) use ($site) {
                $resolved = LegacyAsset::resolveLocalPathFromUrl($matches[2]);

                if ($resolved === null) {
                    return $matches[0];
                }

                $local = '/vendor/'.$resolved['site'].'/'.$resolved['path'];

                return 'url('.$matches[1].$local.$matches[3].')';
            },
            $css
        );

        if (is_string($updated) && $updated !== $css) {
            file_put_contents($filePath, $updated);
        }
    }
}
