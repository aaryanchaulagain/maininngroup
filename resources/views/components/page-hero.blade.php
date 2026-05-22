@props(['title', 'subtitle' => null, 'light' => false])

<section class="section-pad {{ $light ? 'bg-loan-gradient' : 'bg-gradient-to-b from-tax-mint/30 to-white' }}">
    <div class="container-wide reveal">
        <h1 class="font-display text-4xl {{ $light ? 'text-white' : 'text-tax-deep' }} sm:text-5xl">{{ $title }}</h1>
        @if ($subtitle)
            <p class="mt-4 max-w-2xl text-lg {{ $light ? 'text-white/70' : 'text-gray-600' }}">{{ $subtitle }}</p>
        @endif
    </div>
</section>
