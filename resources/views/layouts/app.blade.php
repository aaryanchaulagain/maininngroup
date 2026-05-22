<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'INN Group')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700|instrument-serif:400" rel="stylesheet">
    <x-vite-assets />
    @stack('head')
</head>
<body class="bg-inn-mist font-sans text-inn-navy antialiased @yield('body-class')">
    @yield('body')
    @stack('scripts')
</body>
</html>
