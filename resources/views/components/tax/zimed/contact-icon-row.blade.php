@props([
    'phone' => null,
    'email' => null,
    'mobile' => null,
    'class' => '',
    'showAll' => true,
])

@php
    use App\Models\Team;

    $callLine = filled($phone) ? $phone : (filled($mobile) ? $mobile : null);
    $mobileLine = filled($mobile) ? $mobile : null;

    $items = [
        [
            'key' => 'phone',
            'href' => Team::telHref($callLine),
            'label' => filled($callLine) ? 'Call '.$callLine : 'Phone not available',
        ],
        [
            'key' => 'email',
            'href' => filled($email) ? 'mailto:'.trim($email) : null,
            'label' => filled($email) ? 'Email '.$email : 'Email not available',
        ],
        [
            'key' => 'mobile',
            'href' => Team::telHref($mobileLine),
            'label' => filled($mobileLine) ? 'Mobile '.$mobileLine : 'Mobile not available',
        ],
    ];
@endphp

<div class="tax-contact-icons {{ $class }}" role="group" aria-label="Contact options">
    @foreach ($items as $item)
        @if ($showAll || $item['href'])
            @if ($item['href'])
                <a
                    class="tax-contact-icons__btn"
                    href="{{ $item['href'] }}"
                    aria-label="{{ $item['label'] }}"
                >
                    @include('components.tax.zimed.icons.contact-'.$item['key'])
                </a>
            @else
                <span class="tax-contact-icons__btn tax-contact-icons__btn--disabled" aria-label="{{ $item['label'] }}" title="{{ $item['label'] }}">
                    @include('components.tax.zimed.icons.contact-'.$item['key'])
                </span>
            @endif
        @endif
    @endforeach
</div>
