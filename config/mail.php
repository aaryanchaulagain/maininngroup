<?php

return [
    'default' => env('MAIL_MAILER', 'log'),

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'url' => env('MAIL_URL'),
            'host' => env('MAIL_HOST', '127.0.0.1'),
            'port' => env('MAIL_PORT', 2525),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => (int) env('MAIL_TIMEOUT', 15),
            'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url(env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],
    ],

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@inngroup.com.au'),
        'name' => env('MAIL_FROM_NAME', 'INN Group'),
    ],

    'admin_notification_address' => env('ADMIN_NOTIFICATION_EMAIL', 'aryanchaulagain35@gmail.com'),

    'support_address' => env('MAIL_SUPPORT_ADDRESS', 'hello@inngroup.com.au'),

    'support_phone' => env('MAIL_SUPPORT_PHONE', '+61 2 0000 0000'),

    /*
    |--------------------------------------------------------------------------
    | Queue lead emails
    |--------------------------------------------------------------------------
    | false = send immediately (recommended unless queue worker runs 24/7)
    | true  = dispatch jobs (requires php artisan queue:work)
    */
    'queue_notifications' => env('MAIL_QUEUE_NOTIFICATIONS', false),

    /*
    |--------------------------------------------------------------------------
    | Send admin alert immediately on form submit
    |--------------------------------------------------------------------------
    |
    | When true, new enquiry emails are sent during the request (reliable on
    | Windows/local). When false, they are sent right after the HTTP response.
    |
    */
    'send_admin_immediately' => env('MAIL_SEND_ADMIN_IMMEDIATELY', true),

    'company' => [
        'legal_name' => env('MAIL_COMPANY_NAME', 'INN Group'),
        'address' => env('MAIL_COMPANY_ADDRESS', 'Australia'),
        'website' => env('MAIL_COMPANY_WEBSITE', 'https://inngroup.com.au'),
    ],
];
