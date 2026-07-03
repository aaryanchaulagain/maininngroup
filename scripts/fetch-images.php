<?php

require dirname(__DIR__).'/vendor/autoload.php';
$app = require dirname(__DIR__).'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\Http;

$images = [
    'tax/uploads/2021/05/Bedge-1.png' => 'https://innovativeassociates.com.au/wp-content/uploads/2021/05/Bedge-1.png',
    'tax/uploads/2021/05/Most.png' => 'https://innovativeassociates.com.au/wp-content/uploads/2021/05/Most.png',
    'tax/uploads/2021/05/Buble-like.png' => 'https://innovativeassociates.com.au/wp-content/uploads/2021/05/Buble-like.png',
    'tax/uploads/2021/05/Stars.png' => 'https://innovativeassociates.com.au/wp-content/uploads/2021/05/Stars.png',
    'tax/uploads/2021/05/Loyalty.png' => 'https://innovativeassociates.com.au/wp-content/uploads/2021/05/Loyalty.png',
    'tax/uploads/2021/05/core-values.jpg' => 'https://innovativeassociates.com.au/wp-content/uploads/2021/05/core-values.jpg',
    'tax/uploads/2021/05/contact-us-now-1.jpg' => 'https://innovativeassociates.com.au/wp-content/uploads/2021/05/contact-us-now-1.jpg',
    'tax/uploads/2021/05/contact-us-now-2.jpg' => 'https://innovativeassociates.com.au/wp-content/uploads/2021/05/contact-us-now-2.jpg',
    'tax/uploads/2020/11/testimonials-map-1-1.png' => 'https://innovativeassociates.com.au/wp-content/uploads/2020/11/testimonials-map-1-1.png',
    'main/uploads/2018/05/hero2-bw.png' => 'https://inngroup.com.au/wp-content/uploads/2018/05/hero2-bw.png',
    'main/uploads/2021/01/innovative-group-011-300x89.jpg' => 'https://inngroup.com.au/wp-content/uploads/2021/01/innovative-group-011-300x89.jpg',
];

foreach ($images as $rel => $url) {
    $dest = public_path('vendor/'.$rel);
    if (is_file($dest)) {
        echo "SKIP {$rel}\n";
        continue;
    }
    if (! is_dir(dirname($dest))) {
        mkdir(dirname($dest), 0755, true);
    }
    try {
        $r = Http::timeout(25)->get($url);
        if ($r->successful() && strlen($r->body()) > 200) {
            file_put_contents($dest, $r->body());
            echo "OK {$rel}\n";
        } else {
            echo "FAIL {$rel}\n";
        }
    } catch (Throwable $e) {
        echo "ERR {$rel}\n";
    }
}
