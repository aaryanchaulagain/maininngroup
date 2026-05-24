<!DOCTYPE html>
<html class="avada-html-layout-wide avada-html-header-position-top avada-is-100-percent-template" lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Home - Innovative Finance')</title>
    <link rel="shortcut icon" href="https://innovativewealth.com.au/wp-content/uploads/2020/10/favicon-32x32-1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,regular,700%7CRoboto:regular%7CLato:100,300,regular,700,900,400&subset=latin,latin-ext">
    <link rel="stylesheet" href="https://innovativewealth.com.au/wp-content/plugins/LayerSlider/assets/static/layerslider/css/layerslider.css?ver=6.11.2">
    <link rel="stylesheet" href="https://innovativewealth.com.au/wp-content/uploads/fusion-icons/financial-advisor-v1.0/style.css?ver=3.1.1">
    <link rel="stylesheet" href="https://innovativewealth.com.au/wp-content/themes/Avada/assets/css/style.min.css?ver=7.1.1">
    <link rel="stylesheet" href="https://innovativewealth.com.au/wp-content/uploads/fusion-styles/af4e890554f784fa87021d55bede545a.min.css?ver=3.1.1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/loan-avada-clone.css') }}?v=28">
    @stack('head')
    <style type="text/css" id="fusion-builder-page-css">
        .testimonial-home-block { z-index: 100000; }
    </style>
</head>
<body class="@yield('body-class', 'home wp-singular page-template page-template-100-width page-template-100-width-php page page-id-8 wp-theme-Avada fusion-body ltr fusion-sticky-header layout-wide-mode avada-responsive')">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <div id="boxed-wrapper">
        <div class="fusion-sides-frame"></div>
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

    <script src="https://innovativewealth.com.au/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"></script>
    <script src="https://innovativewealth.com.au/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script>
    <script>
        var LS_Meta = { "v": "6.11.2", "fixGSAP": "1" };
    </script>
    <script src="https://innovativewealth.com.au/wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.utils.js?ver=6.11.2"></script>
    <script src="https://innovativewealth.com.au/wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.kreaturamedia.jquery.js?ver=6.11.2"></script>
    <script src="https://innovativewealth.com.au/wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.transitions.js?ver=6.11.2"></script>
    <script src="https://innovativewealth.com.au/wp-content/uploads/fusion-scripts/0ee19722b98ad1fa8c790dbd2f7a09fd.min.js?ver=3.1.1"></script>
    <script>
        jQuery(function ($) {
            var $wrap = $('#loan-scroll-top');
            var $btn = $('#toTop');

            $(window).on('scroll.loanScrollTop', function () {
                $wrap.toggleClass('is-visible', $(this).scrollTop() > 280);
            }).trigger('scroll.loanScrollTop');

            $btn.on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: 0 }, 450);
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
