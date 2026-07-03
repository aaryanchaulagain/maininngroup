<!DOCTYPE html>
<html lang="en-AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Innovative Group – Accounting Tax Finance and Remittance')</title>
    @if (is_file(public_path('assets/images/favicon.ico')))
        <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    @endif
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/standalone-core.css') }}?v=3">
    <x-vite-assets />
    @stack('head')
</head>
<body class="bg-white text-gray-900 antialiased @yield('body-class')">
    @yield('content')
    @stack('scripts')
</body>
</html>
