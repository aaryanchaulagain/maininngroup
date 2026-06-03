<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Innovative associates – Business For Your Business')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/themes/zimed/assets/css/bootstrap.min.css?ver=4.2.1">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/themes/zimed/assets/css/animate.min.css?ver=4.2.1">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/themes/zimed/assets/css/jquery.mCustomScrollbar.min.css?ver=3.1.13">
    <link rel="stylesheet" href="{{ asset('assets/css/tax-zimed-icon.css') }}?v=1">
    <link rel="stylesheet" href="{{ asset('assets/css/tax-zimed-new-icon.css') }}?v=1">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/themes/zimed/assets/css/main.css?ver=1779273123">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/themes/zimed/style.css?ver=1779273123">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/themes/zimed/assets/css/responsive.css?ver=1779273123">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/zimed-core/assets/css/jquery.bxslider.min.css?ver=4.2.5">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-831.css?ver=1778576297">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css?ver=3.35.0">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-divider.min.css?ver=3.35.0">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.35.0">
    <link rel="stylesheet" href="{{ asset('assets/css/tax-zimed-clone.css') }}?v=41">
    <link rel="stylesheet" href="{{ asset('assets/css/tax-inn-theme.css') }}?v=11">
    @stack('head')
</head>
<body class="tax-inn-platform @yield('body-class', 'home') wp-theme-zimed elementor-default">
<div class="page-wrapper">
    <div class="preloader">
        <div class="lds-ripple"><div></div><div></div></div>
    </div>

    @yield('content')

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <i class="fa fa-angle-up"></i>
    </a>
</div>

<script src="https://innovativeassociates.com.au/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"></script>
<script src="https://innovativeassociates.com.au/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script>
<script src="https://innovativeassociates.com.au/wp-content/themes/zimed/assets/js/bootstrap.bundle.min.js?ver=1.0"></script>
<script src="https://innovativeassociates.com.au/wp-content/themes/zimed/assets/js/jquery.easing.min.js?ver=1.3"></script>
<script src="https://innovativeassociates.com.au/wp-content/plugins/zimed-core/assets/js/jquery.bxslider.min.js?ver=4.2.5"></script>
<script src="https://innovativeassociates.com.au/wp-content/plugins/zimed-core/assets/js/jquery.appear.min.js?ver=1.0"></script>
<script src="https://innovativeassociates.com.au/wp-content/plugins/zimed-core/assets/js/wow.js?ver=1.0"></script>
<script src="https://innovativeassociates.com.au/wp-content/themes/zimed/assets/js/jquery.mCustomScrollbar.concat.min.js?ver=3.1.13"></script>
<script src="https://innovativeassociates.com.au/wp-content/themes/zimed/assets/js/theme.js?ver=1779273123"></script>
<script src="https://innovativeassociates.com.au/wp-content/plugins/zimed-core/assets/js/zimed-core.js?ver=1779273123"></script>
@stack('scripts')
</body>
</html>
