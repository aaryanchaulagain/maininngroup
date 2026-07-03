@props([
    'heading',
    'text',
    'image',
    'imageAlt' => '',
    'animate' => 'fade-in',
])

<div @class(['operate-card flex flex-col items-center text-center p-6 rounded-xl', $animate])>
    <img src="{{ str_starts_with($image, 'http') ? $image : asset($image) }}"
         alt="{{ $imageAlt ?: $heading }}"
         class="h-32 w-auto mb-6"
         loading="lazy"
         decoding="async">
    <h3 class="text-xl font-bold text-gray-900 mb-3 font-display-main">{{ $heading }}</h3>
    <div class="h-0.5 w-10 bg-gray-300 mb-4"></div>
    <p class="text-gray-500 text-sm leading-relaxed">{{ $text }}</p>
</div>
