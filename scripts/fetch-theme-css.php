<?php

require dirname(__DIR__).'/vendor/autoload.php';
$app = require dirname(__DIR__).'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\Http;

$files = [
    'tax/themes/zimed/assets/css/bootstrap.min.css' => 'https://innovativeassociates.com.au/wp-content/themes/zimed/assets/css/bootstrap.min.css',
    'tax/themes/zimed/assets/css/main.css' => 'https://innovativeassociates.com.au/wp-content/themes/zimed/assets/css/main.css',
    'tax/themes/zimed/style.css' => 'https://innovativeassociates.com.au/wp-content/themes/zimed/style.css',
    'tax/themes/zimed/assets/css/responsive.css' => 'https://innovativeassociates.com.au/wp-content/themes/zimed/assets/css/responsive.css',
    'tax/plugins/elementor/assets/css/frontend.min.css' => 'https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/frontend.min.css',
    'main/themes/enfold/css/grid.css' => 'https://inngroup.com.au/wp-content/themes/enfold/css/grid.css',
    'main/themes/enfold/css/base.css' => 'https://inngroup.com.au/wp-content/themes/enfold/css/base.css',
    'main/themes/enfold/css/layout.css' => 'https://inngroup.com.au/wp-content/themes/enfold/css/layout.css',
    'main/themes/enfold/css/shortcodes.css' => 'https://inngroup.com.au/wp-content/themes/enfold/css/shortcodes.css',
    'main/uploads/dynamic_avia/enfold.css' => 'https://inngroup.com.au/wp-content/uploads/dynamic_avia/enfold.css',
];

foreach ($files as $rel => $url) {
    $dest = public_path('vendor/'.$rel);
    if (! is_dir(dirname($dest))) {
        mkdir(dirname($dest), 0755, true);
    }
    try {
        $r = Http::timeout(25)->get($url);
        if ($r->successful() && strlen($r->body()) > 500) {
            file_put_contents($dest, $r->body());
            echo "OK {$rel}\n";
        } else {
            echo "FAIL {$rel} ({$r->status()})\n";
        }
    } catch (Throwable $e) {
        echo "ERR {$rel}: {$e->getMessage()}\n";
    }
}
