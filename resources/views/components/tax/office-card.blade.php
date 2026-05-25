@props(['title', 'lines' => [], 'phone' => null])

<div class="reveal glass-light rounded-3xl p-8">
    <h3 class="text-lg font-bold text-tax-navy">{{ $title }}</h3>
    <div class="mt-4 space-y-2 text-sm text-gray-600">
        @foreach ($lines as $line)
            <p>{{ $line }}</p>
        @endforeach
        @if ($phone)
            <p class="pt-2">
                <a href="tel:{{ preg_replace('/\\s+/', '', $phone) }}" class="font-semibold text-tax-blue hover:underline">{{ $phone }}</a>
            </p>
        @endif
    </div>
</div>

