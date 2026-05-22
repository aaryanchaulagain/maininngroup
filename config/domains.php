<?php

return [
    'main' => env('DOMAIN_MAIN', 'inngroup.com.au'),
    'tax' => env('DOMAIN_TAX', 'innovativetax.inngroup.com.au'),
    'loan' => env('DOMAIN_LOAN', 'innovativeloan.inngroup.com.au'),

    /*
    |--------------------------------------------------------------------------
    | Path prefixes (127.0.0.1 / DOMAIN_ROUTING=false)
    |--------------------------------------------------------------------------
    | e.g. http://127.0.0.1:8000/innovativetax/ and /innovativeloan/
    */
    'paths' => [
        'tax' => env('PATH_PREFIX_TAX', 'innovativetax'),
        'loan' => env('PATH_PREFIX_LOAN', 'innovativeloan'),
    ],

    'loan_contact_email' => env('LOAN_CONTACT_EMAIL', 'info@innovativeloan.com.au'),

    /*
    |--------------------------------------------------------------------------
    | Domain routing
    |--------------------------------------------------------------------------
    | true  = routes only match subdomain hosts (production / hosts file)
    | false = path-based routes: /, /innovativetax, /innovativeloan (127.0.0.1)
    | null  = auto-detect from request host (see domain_routing_enabled())
    */
    'routing' => env('DOMAIN_ROUTING'),
];
