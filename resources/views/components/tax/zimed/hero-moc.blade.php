@php
    $cdn = site_uploads('tax');
    $logoUrl = tax_logo_url();
    $badges = [
        ['src' => $cdn . '/2021/05/Bedge-1.png', 'alt' => 'IPA'],
        ['src' => $cdn . '/2021/05/Most.png', 'alt' => 'Tax Practitioners Board'],
        ['src' => $cdn . '/2021/05/Buble-like.png', 'alt' => 'ASIC'],
        ['src' => $cdn . '/2021/05/Loyalty.png', 'alt' => 'MFAA'],
    ];
@endphp

<div class="banner-one__moc tax-hero-moc" aria-hidden="true">
    <div class="tax-hero-moc__screen">
        <img src="{{ $logoUrl }}" alt="" class="tax-hero-moc__logo" width="280" height="88" decoding="async">
        <div class="tax-hero-moc__badges">
            @foreach ($badges as $badge)
                <img src="{{ $badge['src'] }}" alt="{{ $badge['alt'] }}" class="tax-hero-moc__badge" loading="lazy" decoding="async">
            @endforeach
        </div>
    </div>
</div>
