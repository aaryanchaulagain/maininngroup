<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Legacy WordPress origins (used only by php artisan legacy:mirror)
    |--------------------------------------------------------------------------
    |
    | Front-end templates load assets from public/vendor/{site}/ via legacy_asset().
    | Run the mirror command once (and after template changes) to populate files.
    |
    */
    'origins' => [
        'main' => env('LEGACY_ORIGIN_MAIN', 'https://inngroup.com.au'),
        'tax' => env('LEGACY_ORIGIN_TAX', 'https://innovativeassociates.com.au'),
        'loan' => env('LEGACY_ORIGIN_LOAN', 'https://innovativewealth.com.au'),
    ],

    'external_origins' => [
        'layerdrops' => 'http://layerdrops.com/zimedwp',
    ],

    'jetpack_cdn_hosts' => [
        'i0.wp.com',
        'i1.wp.com',
        'i2.wp.com',
    ],

];
