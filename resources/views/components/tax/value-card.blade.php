@props(['title', 'description', 'icon' => null])

<div class="reveal glass-light rounded-3xl p-8">
    <div class="flex items-start gap-4">
        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-tax-mint text-tax-deep">
            <span class="text-lg font-bold">{{ $icon ?? '✓' }}</span>
        </div>
        <div>
            <h3 class="text-lg font-bold text-tax-deep">{{ $title }}</h3>
            <p class="mt-2 text-sm leading-relaxed text-gray-600">{{ $description }}</p>
        </div>
    </div>
</div>

