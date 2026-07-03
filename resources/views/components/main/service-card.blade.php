@props([
    'title',
    'text',
    'href',
    'buttonLabel',
    'variant' => 'white',
    'animate' => 'fade-in',
])

@php
    $variants = [
        'white' => 'bg-white',
        'gradient-mid' => 'bg-gradient-to-br from-[#094978] to-[#105e96]',
        'gradient-dark' => 'bg-gradient-to-br from-[#072f4c] to-[#0c4771]',
    ];
    $isDark = $variant !== 'white';
    $boxClass = $variants[$variant] ?? $variants['white'];
@endphp

<div @class(['service-card p-10 flex flex-col', $boxClass, $animate])>
    <h2 @class([
        'text-2xl font-bold text-center mb-3 font-display-main',
        'text-gray-900' => ! $isDark,
        'text-white' => $isDark,
    ])>{!! $title !!}</h2>
    <div @class(['h-0.5 w-12 mx-auto mb-5', 'bg-gray-300' => ! $isDark, 'bg-white/40' => $isDark])></div>
    <p @class([
        'text-center text-sm leading-relaxed flex-1',
        'text-gray-600' => ! $isDark,
        'text-white/90' => $isDark,
    ])>{{ $text }}</p>
    <div class="mt-6 text-center">
        <a href="{{ $href }}" @class([
            'hero-btn inline-flex items-center gap-2 px-6 py-3 text-sm font-semibold rounded-full',
            'bg-[#094978] text-white hover:bg-[#072f4c]' => ! $isDark,
            'bg-white text-[#094978] hover:bg-gray-100' => $variant === 'gradient-mid',
            'bg-white text-[#072f4c] hover:bg-gray-100' => $variant === 'gradient-dark',
        ])>
            {{ $buttonLabel }}
            <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
        </a>
    </div>
</div>
