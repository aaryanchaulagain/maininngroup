<!DOCTYPE html>
<html lang="en-AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Home - Innovative Finance')</title>
    <link rel="icon" href="{{ vendored_asset('loan', 'uploads/2020/10/favicon-32x32-1.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ vendored_asset('loan', 'plugins/LayerSlider/assets/static/layerslider/css/layerslider.css') }}">
    <link rel="stylesheet" href="{{ vendored_asset('loan', 'uploads/fusion-icons/financial-advisor-v1.0/style.css') }}">
    <link rel="stylesheet" href="{{ vendored_asset('loan', 'themes/Avada/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ vendored_asset('loan', 'uploads/fusion-styles/af4e890554f784fa87021d55bede545a.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/standalone-core.css') }}?v=3">
    <link rel="stylesheet" href="{{ asset('assets/css/site-logos.css') }}?v=1">
    <link rel="stylesheet" href="{{ asset('assets/css/loan-avada-clone.css') }}?v=45">
    <link rel="stylesheet" href="{{ asset('assets/css/loan-inn-theme.css') }}?v=10">
    <link rel="stylesheet" href="{{ asset('assets/css/loan-inn-footer.css') }}?v=2">
    @stack('head')
</head>
<body class="loan-inn-platform @yield('body-class', 'home')">
    <div class="loan-inn-ambient" aria-hidden="true"></div>
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <div id="boxed-wrapper">
        <div id="wrapper" class="fusion-wrapper">
            @yield('content')
        </div>
    </div>
    <div class="to-top-container to-top-left loan-scroll-top-wrap" id="loan-scroll-top">
        <a href="#wrapper" id="toTop" class="fusion-top-top-link loan-scroll-top" aria-label="Scroll to top">
            <i class="fas fa-chevron-up" aria-hidden="true"></i>
            <span class="screen-reader-text">Go to Top</span>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous" defer></script>
    <script src="{{ asset('assets/js/loan-site.js') }}?v=3" defer></script>
    @stack('scripts')
</body>
</html>
