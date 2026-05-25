@props(['title' => null, 'items' => []])

<div class="reveal rounded-3xl border border-gray-100 bg-white p-8 shadow-sm">
    @if ($title)
        <h3 class="text-lg font-bold text-tax-navy">{{ $title }}</h3>
    @endif
    <ul class="{{ $title ? 'mt-5' : '' }} grid gap-3 text-sm text-gray-700 sm:grid-cols-2">
        @foreach ($items as $item)
            <li class="flex items-start gap-3">
                <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-tax-blue"></span>
                <span>{{ $item }}</span>
            </li>
        @endforeach
    </ul>
</div>

