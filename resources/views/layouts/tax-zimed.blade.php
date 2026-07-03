<!DOCTYPE html>
<html lang="en-AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Innovative Tax – Business For Your Business')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous">
    @if (is_file(public_path('vendor/tax/themes/zimed/assets/css/main.css')))
        <link rel="stylesheet" href="{{ vendored_asset('tax', 'themes/zimed/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ vendored_asset('tax', 'themes/zimed/assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ vendored_asset('tax', 'themes/zimed/style.css') }}">
        <link rel="stylesheet" href="{{ vendored_asset('tax', 'themes/zimed/assets/css/responsive.css') }}">
        @if (is_file(public_path('vendor/tax/plugins/elementor/assets/css/frontend.min.css')))
            <link rel="stylesheet" href="{{ vendored_asset('tax', 'plugins/elementor/assets/css/frontend.min.css') }}">
        @endif
    @endif
    <link rel="stylesheet" href="{{ asset('assets/css/standalone-core.css') }}?v=3">
    <link rel="stylesheet" href="{{ asset('assets/css/site-logos.css') }}?v=1">
    <link rel="stylesheet" href="{{ asset('assets/css/tax-zimed-icon.css') }}?v=1">
    <link rel="stylesheet" href="{{ asset('assets/css/tax-zimed-new-icon.css') }}?v=1">
    <link rel="stylesheet" href="{{ asset('assets/css/tax-standalone-sections.css') }}?v=1">
    <link rel="stylesheet" href="{{ asset('assets/css/tax-zimed-clone.css') }}?v=46">
    <link rel="stylesheet" href="{{ asset('assets/css/tax-inn-theme.css') }}?v=15">
    @stack('head')
</head>
<body class="tax-inn-platform @yield('body-class', 'home')">
<div class="page-wrapper">
    @yield('content')

    <a href="#" class="scroll-to-target scroll-to-top" aria-label="Scroll to top">
        <i class="fa fa-angle-up"></i>
    </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous" defer></script>
<script src="{{ asset('assets/js/tax-site.js') }}?v=2" defer></script>
@stack('scripts')
</body>
</html>
