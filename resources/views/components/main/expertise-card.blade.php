@props([
    'iconClass',
    'title',
    'text',
    'href',
    'variant' => 'dark',
    'animate' => 'fade-in',
])

@php
    $boxClass = $variant === 'gradient'
        ? 'bg-gradient-to-br from-[#094978] to-[#105e96]'
        : 'bg-[#072f4c]';
@endphp

<div @class(['expertise-card p-10 flex flex-col rounded-xl', $boxClass, $animate])>
    <div class="text-center mb-5">
        <i class="{{ $iconClass }} text-5xl text-white" aria-hidden="true"></i>
    </div>
    <h3 class="text-xl font-bold text-white text-center mb-3 font-display-main">{!! $title !!}</h3>
    <div class="h-0.5 w-10 bg-white/40 mx-auto mb-4"></div>
    <p class="text-white/80 text-center text-sm leading-relaxed flex-1">{{ $text }}</p>
    <div class="mt-6 text-center">
        <a href="{{ $href }}" class="learn-btn inline-flex items-center gap-2 bg-white text-[#072f4c] px-5 py-2.5 text-sm font-semibold rounded-full">
            Learn more
            <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
        </a>
    </div>
</div>
