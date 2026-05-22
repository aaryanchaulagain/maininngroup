@props([
    'title' => 'About Page',
    'breadcrumb' => null,
    'crumbs' => [],
])

@php
    $bg = 'https://innovativeassociates.com.au/wp-content/uploads/2021/03/page-header-bg-4.jpg';

    if (empty($crumbs) && $breadcrumb) {
        $crumbs = [
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => $breadcrumb, 'current' => true],
        ];
    }
@endphp

<section class="page-header" style="background-image: url({{ $bg }});">
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            @foreach ($crumbs as $crumb)
                <li class="thm-breadcrumb__item {{ !empty($crumb['current']) ? 'current' : '' }}">
                    @if (!empty($crumb['current']))
                        <span>{{ $crumb['label'] }}</span>
                    @else
                        <a href="{{ $crumb['url'] ?? '#' }}">{{ $crumb['label'] }}</a>
                    @endif
                </li>
            @endforeach
        </ul>
        <h2>{{ $title }}</h2>
    </div>
</section>
