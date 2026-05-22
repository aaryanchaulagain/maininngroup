@props(['member', 'theme' => 'tax'])

<article class="reveal overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition hover:shadow-lg">
    <div class="aspect-[4/5] overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200">
        @if ($member->photoUrl())
            <img src="{{ $member->photoUrl() }}" alt="{{ $member->name }}" class="h-full w-full object-cover" loading="lazy">
        @else
            <div class="flex h-full items-center justify-center text-5xl font-display text-gray-300">{{ substr($member->name, 0, 1) }}</div>
        @endif
    </div>
    <div class="p-6">
        <h3 class="text-lg font-bold">{{ $member->name }}</h3>
        @if ($member->role)
            <p class="mt-1 text-sm font-medium {{ $theme === 'loan' ? 'text-loan-gold' : 'text-tax-teal' }}">{{ $member->role }}</p>
        @endif
        @if ($member->bio)
            <p class="mt-3 text-sm leading-relaxed text-gray-600 line-clamp-4">{{ $member->bio }}</p>
        @endif
    </div>
</article>
