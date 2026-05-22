@props([
    'items' => [],
    'icon' => 'fas fa-check',
    'class' => '',
])

<ul class="elementor-icon-list-items {{ $class }}">
    @foreach ($items as $item)
        <li class="elementor-icon-list-item">
            <span class="elementor-icon-list-icon">
                <i aria-hidden="true" class="{{ $icon }}"></i>
            </span>
            <span class="elementor-icon-list-text">{{ $item }}</span>
        </li>
    @endforeach
</ul>
