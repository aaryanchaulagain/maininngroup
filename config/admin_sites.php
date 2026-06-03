<?php

return [

    'main' => [
        'label' => 'INN Group',
        'short' => 'Main',
        'description' => 'Corporate site contact enquiries',
        'color' => 'slate',
        'domain_key' => 'main',
        'nav' => [
            ['route' => 'contacts.index', 'label' => 'Contact leads', 'icon' => 'envelope'],
        ],
    ],

    'tax' => [
        'label' => 'Innovative Tax',
        'short' => 'Tax',
        'description' => 'Innovative Associates tax subdomain',
        'color' => 'orange',
        'domain_key' => 'tax',
        'nav' => [
            ['route' => 'contacts.index', 'label' => 'Contact form', 'icon' => 'envelope'],
            ['route' => 'articles.index', 'label' => 'Articles', 'icon' => 'newspaper'],
            ['route' => 'teams.index', 'label' => 'Meet the team', 'icon' => 'users'],
            ['route' => 'testimonials.index', 'label' => 'Testimonials', 'icon' => 'quote'],
            ['route' => 'calculators.index', 'label' => 'Calculator', 'icon' => 'calculator'],
        ],
    ],

    'loan' => [
        'label' => 'Innovative Finance',
        'short' => 'Finance',
        'description' => 'Loan & mortgage subdomain',
        'color' => 'violet',
        'domain_key' => 'loan',
        'nav' => [
            ['route' => 'contacts.index', 'label' => 'Contact', 'icon' => 'envelope'],
            ['route' => 'contents.index', 'label' => 'About & pages', 'icon' => 'file'],
            ['route' => 'teams.index', 'label' => 'Meet the team', 'icon' => 'users'],
            ['route' => 'testimonials.index', 'label' => 'Testimonials', 'icon' => 'quote'],
            ['route' => 'articles.index', 'label' => 'Articles', 'icon' => 'newspaper'],
        ],
    ],

    'advisory' => [
        'label' => 'Business Advisory',
        'short' => 'Advisory',
        'description' => 'Innovative Advisory subdomain',
        'color' => 'blue',
        'domain_key' => 'advisory',
        'route_prefix' => 'advisory.',
        'nav' => [
            ['route' => 'contacts.index', 'label' => 'Contact', 'icon' => 'envelope'],
            ['route' => 'advisory.articles.index', 'label' => 'Articles', 'icon' => 'newspaper'],
            ['route' => 'advisory.teams.index', 'label' => 'Meet the team', 'icon' => 'users'],
            ['route' => 'advisory.testimonials.index', 'label' => 'Testimonials', 'icon' => 'quote'],
        ],
    ],

];
