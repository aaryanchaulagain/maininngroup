@props(['href' => null, 'title', 'description', 'icon' => null, 'variant' => 'light'])

@php
    $classes = match($variant) {
        'dark' => 'glass-dark text-white group-hover:border-white/30',
        'gold' => 'glass-gold text-white group-hover:border-loan-gold/50',
        default => 'glass-light text-inn-navy group-hover:border-tax-teal/40',
    };
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => "group block rounded-3xl p-8 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl {$classes}"]) }}>
@else
    <div {{ $attributes->merge(['class' => "group rounded-3xl p-8 {$classes}"]) }}>
@endif
    @if ($icon)
        <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-white/20 text-2xl">{{ $icon }}</div>
    @endif
    <h3 class="text-xl font-bold tracking-tight">{{ $title }}</h3>
    <p class="mt-3 text-sm leading-relaxed opacity-80">{{ $description }}</p>
    @isset($slot)
        <div class="mt-6">{{ $slot }}</div>
    @endisset
@if ($href)
    </a>
@else
    </div>
@endif
