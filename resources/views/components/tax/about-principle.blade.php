@push('head')
    <link href="https://fonts.bunny.net/css?family=barlow:400,500,600,700" rel="stylesheet">
@endpush

@props([
    'image' => site_image('tax', '2021/04/innovative-01.jpg'),
    'teamUrl' => null,
])

@php
    $teamUrl = $teamUrl ?? route('tax.about.team');
@endphp

<section class="tax-about-principle">
    <div class="tax-about-principle__inner container-wide">
        <div class="tax-about-principle__image">
            <img src="{{ $image }}" alt="Innovative Associates team" loading="eager">
        </div>

        <div class="tax-about-principle__content">
            <h2 class="tax-about-principle__title">
                Our <span class="tax-about-principle__title-accent">Principle</span>
            </h2>

            <p class="tax-about-principle__text">
                In an increasingly competitive business world, Innovative Associates and Its People works with individuals, small &amp; large businesses, the Government, and the not-for-profit organization and community to help each entity’s need and grow better financially.
            </p>

            <p class="tax-about-principle__text">
                Innovative Associates delivers quality in Book Keeping, Payroll, Taxation, Business Advisory, and associated compliance services to its all clients Australia-wide.
            </p>

            <ul class="tax-about-principle__list">
                <li>
                    <span class="tax-about-principle__check" aria-hidden="true">✓</span>
                    Find solutions
                </li>
                <li>
                    <span class="tax-about-principle__check" aria-hidden="true">✓</span>
                    Build Trust
                </li>
                <li>
                    <span class="tax-about-principle__check" aria-hidden="true">✓</span>
                    Financial success
                </li>
            </ul>

            <a href="{{ $teamUrl }}" class="tax-about-principle__btn">Meet our team</a>
        </div>
    </div>
</section>
