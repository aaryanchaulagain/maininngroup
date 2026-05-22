@props(['assets' => ['resources/css/app.css', 'resources/js/app.js']])

@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite($assets)
@else
    {{-- Fallback until `npm run dev` or `npm run build` is executed --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js" defer></script>
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
@endif
