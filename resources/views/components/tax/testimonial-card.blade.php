@props(['quote', 'name', 'meta' => null])

<article class="reveal glass-light rounded-3xl p-8">
    <p class="text-sm leading-relaxed text-gray-700">“{{ $quote }}”</p>
    <div class="mt-6 flex items-center gap-3">
        <div class="h-10 w-10 rounded-2xl bg-tax-bg border border-tax-border"></div>
        <div>
            <p class="text-sm font-semibold text-tax-navy">{{ $name }}</p>
            @if ($meta)
                <p class="text-xs text-gray-500">{{ $meta }}</p>
            @endif
        </div>
    </div>
</article>

