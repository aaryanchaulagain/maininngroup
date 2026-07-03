<?php

/** Safe bulk rewrite: legacy WordPress URLs → local site_image / site_uploads */

$root = dirname(__DIR__);
$dirs = [$root.'/resources/views', $root.'/database/seeders'];

$replacements = [
    "legacy_uploads('tax')" => "site_uploads('tax')",
    "legacy_uploads('loan')" => "site_uploads('loan')",
    '$assetBase = legacy_uploads(' => '$assetBase = site_uploads(',
    "legacy_asset('main', 'uploads/2021/01/innovative-group-011-300x89.jpg')" => "main_logo_url()",
    "legacy_asset('main', 'uploads/2018/05/hero2-bw.png')" => "site_image('main', 'hero2-bw.png')",
    "legacy_external('layerdrops', 'uploads/2020/11/contact-shape-1-2.png')" => "site_image('tax', 'decor/contact-shape-1.png')",
    "legacy_external('layerdrops', 'uploads/2020/10/contact-shape-2.png')" => "site_image('tax', 'decor/contact-shape-2.png')",
    "legacy_external('layerdrops', 'uploads/2020/11/contact-shape-1-1.png')" => "site_image('tax', 'decor/contact-shape-3.png')",
];

$changed = 0;

foreach ($dirs as $dir) {
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($it as $file) {
        if (! $file->isFile() || ! str_ends_with($file->getFilename(), '.php')) {
            continue;
        }
        $path = $file->getPathname();
        $content = file_get_contents($path);
        $original = $content;

        foreach ($replacements as $from => $to) {
            $content = str_replace($from, $to, $content);
        }

        // Remove @push('head') blocks that only load legacy elementor/enfold CSS
        $content = preg_replace(
            '/@push\(\'head\'\)\s*(?:\s*<link[^>]*legacy_asset[^>]*>\s*)+(?:\s*<style>[\s\S]*?<\/style>\s*)?@endpush\s*\n?/m',
            '',
            $content
        );

        $content = preg_replace(
            '/@push\(\'head\'\)\s*<link rel="stylesheet" href="\{\{ legacy_asset\([^}]+\) \}\}">\s*@endpush\s*\n?/m',
            '',
            $content
        );

        if ($content !== $original) {
            file_put_contents($path, $content);
            $changed++;
            echo "Updated: $path\n";
        }
    }
}

echo "Files updated: $changed\n";
