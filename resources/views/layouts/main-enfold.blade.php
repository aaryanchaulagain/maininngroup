<!DOCTYPE html>
<html lang="en-AU" id="top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Innovative Group – Accounting Tax Finance and Remittance')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous">
    @if (is_file(public_path('vendor/main/themes/enfold/css/grid.css')))
        <link rel="stylesheet" href="{{ vendored_asset('main', 'themes/enfold/css/grid.css') }}">
        <link rel="stylesheet" href="{{ vendored_asset('main', 'themes/enfold/css/base.css') }}">
        <link rel="stylesheet" href="{{ vendored_asset('main', 'themes/enfold/css/layout.css') }}">
        <link rel="stylesheet" href="{{ vendored_asset('main', 'themes/enfold/css/shortcodes.css') }}">
        @if (is_file(public_path('vendor/main/uploads/dynamic_avia/enfold.css')))
            <link rel="stylesheet" href="{{ vendored_asset('main', 'uploads/dynamic_avia/enfold.css') }}">
        @endif
    @endif
    <link rel="stylesheet" href="{{ asset('assets/css/standalone-core.css') }}?v=2">
    <link rel="stylesheet" href="{{ asset('assets/css/site-logos.css') }}?v=1">
    <link rel="stylesheet" href="{{ asset('assets/css/main-standalone.css') }}?v=3">
    <link rel="stylesheet" href="{{ asset('assets/css/main-enfold-clone.css') }}?v=28">
    @stack('head')
</head>
<body class="@yield('body-class', 'inn-main-site home')" id="top" itemscope itemtype="https://schema.org/WebPage">

<div id="wrap_all">
    @yield('content')
</div>

<a href="#top" title="Scroll to top" id="scroll-top-link" aria-hidden="true">
    <i class="fa-solid fa-chevron-up" aria-hidden="true"></i>
    <span class="screen-reader-text">Scroll to top</span>
</a>

<script src="{{ asset('assets/js/main-site.js') }}?v=2" defer></script>
@stack('scripts')
</body>
</html>
