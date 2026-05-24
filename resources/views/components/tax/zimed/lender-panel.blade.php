@php
    $majorLenders = [
        ['name' => 'Commonwealth Bank', 'domain' => 'commbank.com.au'],
        ['name' => 'Westpac', 'domain' => 'westpac.com.au'],
        ['name' => 'ANZ', 'domain' => 'anz.com'],
        ['name' => 'NAB', 'domain' => 'nab.com.au'],
        ['name' => 'Bank Australia', 'domain' => 'bankaust.com.au'],
    ];

    $otherLenders = [
        ['name' => 'Bankwest', 'domain' => 'bankwest.com.au'],
        ['name' => 'Macquarie', 'domain' => 'macquarie.com'],
        ['name' => 'St George', 'domain' => 'stgeorge.com.au'],
        ['name' => 'Suncorp', 'domain' => 'suncorp.com.au'],
        ['name' => 'ING', 'domain' => 'ing.com.au'],
        ['name' => 'Ubank', 'domain' => 'ubank.com.au'],
        ['name' => 'ME Bank', 'domain' => 'mebank.com.au'],
        ['name' => 'AMP', 'domain' => 'amp.com.au'],
        ['name' => 'Heritage', 'domain' => 'heritage.com.au'],
        ['name' => 'Teachers Mutual', 'domain' => 'tmbank.com.au'],
        ['name' => 'Firstmac', 'domain' => 'firstmac.com.au'],
        ['name' => 'Bank of China', 'domain' => 'bankofchina.com'],
        ['name' => 'Bank of Sydney', 'domain' => 'bos.com.au'],
        ['name' => 'Adelaide Bank', 'domain' => 'adelaidebank.com.au'],
        ['name' => 'Bendigo Bank', 'domain' => 'bendigobank.com.au'],
        ['name' => 'Resi Home Loans', 'domain' => 'resimoney.com.au'],
        ['name' => 'Brighten', 'domain' => 'brighten.com.au'],
        ['name' => 'Liberty', 'domain' => 'liberty.com.au'],
        ['name' => 'Pepper', 'domain' => 'pepper.com.au'],
        ['name' => 'Resimac', 'domain' => 'resimac.com.au'],
        ['name' => 'Bluestone', 'domain' => 'bluestone.com.au'],
        ['name' => 'Granite', 'domain' => 'granitefinance.com.au'],
        ['name' => 'Gateway', 'domain' => 'gatewaybank.com.au'],
        ['name' => 'Thinktank', 'domain' => 'thinktank.net.au'],
    ];

    $logoUrl = fn (string $domain) => 'https://www.google.com/s2/favicons?domain=' . urlencode($domain) . '&sz=128';
@endphp

<section id="lenders" class="tax-lenders">
    <div class="container">
        <header class="tax-lenders__header">
            <h2 class="tax-lenders__title">Our Extensive Lender Panel</h2>
            <p class="tax-lenders__lead">We work with Australia's leading financial institutions to find you the best loan</p>
        </header>

        <h3 class="tax-lenders__category">Major Banks</h3>
        <div class="tax-lenders__major">
            @foreach ($majorLenders as $lender)
                <div class="tax-lenders__logo-card">
                    <img
                        src="{{ $logoUrl($lender['domain']) }}"
                        alt="{{ $lender['name'] }}"
                        width="120"
                        height="48"
                        loading="lazy"
                        class="tax-lenders__logo-img"
                        onerror="this.style.display='none';this.nextElementSibling.style.display='block';"
                    >
                    <span class="tax-lenders__logo-fallback">{{ $lender['name'] }}</span>
                </div>
            @endforeach
        </div>

        <h3 class="tax-lenders__category">Other Lenders</h3>
        <div class="tax-lenders__slider-outer">
            <div class="tax-lenders__slider-track" aria-hidden="true">
                @foreach (array_merge($otherLenders, $otherLenders) as $lender)
                    <div class="tax-lenders__slide">
                        <div class="tax-lenders__slide-logo">
                            <img
                                src="{{ $logoUrl($lender['domain']) }}"
                                alt="{{ $lender['name'] }}"
                                width="64"
                                height="64"
                                loading="lazy"
                                onerror="this.style.visibility='hidden';"
                            >
                        </div>
                        <span class="tax-lenders__slide-name">{{ $lender['name'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
