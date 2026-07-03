<!DOCTYPE html>
<html lang="en-AU">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Business Advisory — Innovative Group')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/standalone-core.css') }}?v=3">
    <link rel="stylesheet" href="{{ asset('assets/css/site-logos.css') }}?v=1">
    <link rel="stylesheet" href="{{ asset('assets/css/advisory-premium.css') }}?v=17">
    @stack('head')
</head>
<body class="adv-site">
    @include('components.advisory.header', ['active' => $active ?? ''])
    <main>@yield('content')</main>
    @include('components.advisory.footer')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>
    @stack('scripts')
</body>
</html>
