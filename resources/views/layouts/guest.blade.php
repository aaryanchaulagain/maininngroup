<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Login' }} — INN Group Admin</title>
    <x-vite-assets />
</head>
<body class="flex min-h-screen items-center justify-center bg-main-gradient px-4">
    <div class="w-full max-w-md rounded-2xl border border-white/20 bg-white/95 p-8 shadow-2xl backdrop-blur">
        {{ $slot }}
    </div>
</body>
</html>
