<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') — INN Group</title>
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700" rel="stylesheet">
    <x-vite-assets />
</head>
<body class="bg-slate-100 font-sans text-slate-800 antialiased">
    <div class="flex min-h-screen">
        @include('components.admin.sidebar')
        <div class="flex flex-1 flex-col">
            @include('components.admin.header')
            <main class="flex-1 p-6 lg:p-8">
                @include('components.alert')
                @yield('content')
            </main>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
</body>
</html>
