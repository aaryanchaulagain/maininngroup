<?php

return [
    'main' => env('DOMAIN_MAIN', 'inngroup.com.au'),
    'tax' => env('DOMAIN_TAX', 'innovativetax.inngroup.com.au'),
    'loan' => env('DOMAIN_LOAN', 'innovativefinance.inngroup.com.au'),
    'advisory' => env('DOMAIN_ADVISORY', 'innovativeadvisory.inngroup.com.au'),

    /*
    |--------------------------------------------------------------------------
    | Path prefixes (127.0.0.1 / DOMAIN_ROUTING=false)
    |--------------------------------------------------------------------------
    | e.g. http://127.0.0.1:8000/innovativetax/ and /innovativefinance/
    */
    'paths' => [
        'tax' => env('PATH_PREFIX_TAX', 'innovativetax'),
        'loan' => env('PATH_PREFIX_LOAN', 'innovativefinance'),
        'advisory' => env('PATH_PREFIX_ADVISORY', 'innovativeadvisory'),
    ],

    'loan_contact_email' => env('LOAN_CONTACT_EMAIL', 'info@innovativefinance.com.au'),

    /*
    |--------------------------------------------------------------------------
    | Domain routing
    |--------------------------------------------------------------------------
    | true  = routes only match subdomain hosts (production / hosts file)
    | false = path-based routes: /, /innovativetax, /innovativefinance (127.0.0.1)
    | null  = auto-detect from request host (see domain_routing_enabled())
    */
    'routing' => env('DOMAIN_ROUTING'),
];
