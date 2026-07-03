<?php

/**
 * Safe rewriter: str_replace only — no regex. Re-run after adding new legacy URLs.
 */

$root = dirname(__DIR__);
$dirs = [$root.'/resources/views', $root.'/database/seeders'];

$replacements = [
    "\$cdn = 'https://innovativeassociates.com.au/wp-content/uploads';" => "\$cdn = legacy_uploads('tax');",
    "@php \$cdn = 'https://innovativeassociates.com.au/wp-content/uploads'; @endphp" => "@php \$cdn = legacy_uploads('tax'); @endphp",
    "\$cdn = 'https://innovativewealth.com.au/wp-content/uploads';" => "\$cdn = legacy_uploads('loan');",
    "\$loanCdn = 'https://innovativewealth.com.au/wp-content/uploads';" => "\$loanCdn = legacy_uploads('loan');",
    "\$assetBase = 'https://innovativeassociates.com.au/wp-content/uploads';" => "\$assetBase = legacy_uploads('tax');",
    "\$theme = 'https://innovativeassociates.com.au/wp-content/themes/zimed/assets/images';" => "\$theme = legacy_asset('tax', 'themes/zimed/assets/images');",
    "'image' => 'https://innovativeassociates.com.au/wp-content/uploads/2020/12/cta-2-3-1-1.png'," => "'image' => legacy_asset('tax', 'uploads/2020/12/cta-2-3-1-1.png'),",
    "'image' => 'https://innovativeassociates.com.au/wp-content/uploads/2021/04/innovative-01.jpg'," => "'image' => legacy_asset('tax', 'uploads/2021/04/innovative-01.jpg'),",
    "\$heroDesktop = 'https://innovativeassociates.com.au/wp-content/uploads/2021/05/slider-1-2.jpg';" => "\$heroDesktop = legacy_asset('tax', 'uploads/2021/05/slider-1-2.jpg');",
    "\$heroMobile = 'https://innovativeassociates.com.au/wp-content/uploads/2021/05/mobilebg.jpg';" => "\$heroMobile = legacy_asset('tax', 'uploads/2021/05/mobilebg.jpg');",
    "\$heroBg = 'https://i0.wp.com/inngroup.com.au/wp-content/uploads/2018/05/hero2-bw.png?fit=1800%2C750&ssl=1';" => "\$heroBg = legacy_asset('main', 'uploads/2018/05/hero2-bw.png');",
    "skinsPath: 'https://innovativewealth.com.au/wp-content/plugins/LayerSlider/assets/static/layerslider/skins/'" => "skinsPath: @json(legacy_asset('loan', 'plugins/LayerSlider/assets/static/layerslider/skins/'))",
    'src="http://layerdrops.com/zimedwp/wp-content/uploads/2020/11/contact-shape-1-2.png"' => 'src="{{ legacy_external(\'layerdrops\', \'uploads/2020/11/contact-shape-1-2.png\') }}"',
    'src="http://layerdrops.com/zimedwp/wp-content/uploads/2020/10/contact-shape-2.png"' => 'src="{{ legacy_external(\'layerdrops\', \'uploads/2020/10/contact-shape-2.png\') }}"',
    'src="http://layerdrops.com/zimedwp/wp-content/uploads/2020/11/contact-shape-1-1.png"' => 'src="{{ legacy_external(\'layerdrops\', \'uploads/2020/11/contact-shape-1-1.png\') }}"',
    'src="https://inngroup.com.au/wp-content/uploads/2021/01/innovative-group-011-300x89.jpg"' => 'src="{{ legacy_asset(\'main\', \'uploads/2021/01/innovative-group-011-300x89.jpg\') }}"',
    'href="https://inngroup.com.au/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/contact/contact.css?ver=6.9.4"' => 'href="{{ legacy_asset(\'main\', \'themes/enfold/config-templatebuilder/avia-shortcodes/contact/contact.css\', \'6.9.4\') }}"',
    'src="https://inngroup.com.au/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3"' => 'src="{{ legacy_wp_include(\'js/jquery/ui/core.min.js\', \'1.13.3\') }}"',
    'src="https://inngroup.com.au/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.3"' => 'src="{{ legacy_wp_include(\'js/jquery/ui/datepicker.min.js\', \'1.13.3\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-28.css?ver=1778579727"' => 'href="{{ legacy_asset(\'tax\', \'uploads/elementor/css/post-28.css\', \'1778579727\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-37.css?ver=1778603281"' => 'href="{{ legacy_asset(\'tax\', \'uploads/elementor/css/post-37.css\', \'1778603281\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-45.css?ver=1779432971"' => 'href="{{ legacy_asset(\'tax\', \'uploads/elementor/css/post-45.css\', \'1779432971\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-47.css?ver=1779432497"' => 'href="{{ legacy_asset(\'tax\', \'uploads/elementor/css/post-47.css\', \'1779432497\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-49.css?ver=1779431804"' => 'href="{{ legacy_asset(\'tax\', \'uploads/elementor/css/post-49.css\', \'1779431804\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-53.css?ver=1779417167"' => 'href="{{ legacy_asset(\'tax\', \'uploads/elementor/css/post-53.css\', \'1779417167\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-882.css?ver=1779432123"' => 'href="{{ legacy_asset(\'tax\', \'uploads/elementor/css/post-882.css\', \'1779432123\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-886.css?ver=1779431983"' => 'href="{{ legacy_asset(\'tax\', \'uploads/elementor/css/post-886.css\', \'1779431983\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-1287.css?ver=1778595449"' => 'href="{{ legacy_asset(\'tax\', \'uploads/elementor/css/post-1287.css\', \'1778595449\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-1292.css?ver=1778603285"' => 'href="{{ legacy_asset(\'tax\', \'uploads/elementor/css/post-1292.css\', \'1778603285\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-1312.css?ver=1779405246"' => 'href="{{ legacy_asset(\'tax\', \'uploads/elementor/css/post-1312.css\', \'1779405246\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=4.0.9"' => 'href="{{ legacy_asset(\'tax\', \'plugins/elementor/assets/css/widget-image.min.css\', \'4.0.9\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=4.0.9"' => 'href="{{ legacy_asset(\'tax\', \'plugins/elementor/assets/css/widget-heading.min.css\', \'4.0.9\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.35.0"' => 'href="{{ legacy_asset(\'tax\', \'plugins/elementor/assets/css/widget-heading.min.css\', \'3.35.0\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-social-icons.min.css?ver=3.35.0"' => 'href="{{ legacy_asset(\'tax\', \'plugins/elementor/assets/css/widget-social-icons.min.css\', \'3.35.0\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3"' => 'href="{{ legacy_asset(\'tax\', \'plugins/elementor/assets/lib/font-awesome/css/solid.min.css\', \'5.15.3\') }}"',
    'href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3"' => 'href="{{ legacy_asset(\'tax\', \'plugins/elementor/assets/lib/font-awesome/css/regular.min.css\', \'5.15.3\') }}"',
];

$changed = 0;

foreach ($dirs as $dir) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

    foreach ($iterator as $file) {
        if (! $file->isFile() || ! str_ends_with($file->getFilename(), '.php')) {
            continue;
        }

        $path = $file->getPathname();
        $content = file_get_contents($path);
        $original = $content;

        foreach ($replacements as $search => $replace) {
            $content = str_replace($search, $replace, $content);
        }

        if ($content !== $original) {
            file_put_contents($path, $content);
            $changed++;
            echo "Updated: {$path}\n";
        }
    }
}

echo "Files updated: {$changed}\n";
