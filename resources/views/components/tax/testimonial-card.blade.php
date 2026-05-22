@props(['quote', 'name', 'meta' => null])

<article class="reveal glass-light rounded-3xl p-8">
    <p class="text-sm leading-relaxed text-gray-700">“{{ $quote }}”</p>
    <div class="mt-6 flex items-center gap-3">
        <div class="h-10 w-10 rounded-2xl bg-gradient-to-br from-tax-mint to-emerald-100"></div>
        <div>
            <p class="text-sm font-semibold text-tax-deep">{{ $name }}</p>
            @if ($meta)
                <p class="text-xs text-gray-500">{{ $meta }}</p>
            @endif
        </div>
    </div>
</article>

