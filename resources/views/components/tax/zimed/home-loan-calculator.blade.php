@php
    $accent = 'ff8a3d';
    $navy = '0b1f3f';
    $muted = '6a26ed';
    $iframeQuery = http_build_query([
        'HighchartColumnInterest' => $navy,
        'HighchartColumnPrincipal' => $accent,
        'HighchartPieInterest' => $navy,
        'HighchartPiePrincipal' => $accent,
        'HighchartPieInsurance' => '7c7d8a',
        'HighchartPieMortgageInsurance' => 'e8ecf3',
        'ButtonColor' => $accent,
        'HighlightTextColor' => $accent,
        'HighlightTextColorLight' => $accent,
        'HeaderColor' => $accent,
        'NavigateMode' => 'true',
        'CalcMode' => 'Mortgage',
        'Footnote' => 'true',
        'AmortTab' => 'true',
        'lo' => 'false',
        'lo-name' => '',
        'lo-title' => '',
        'lo-nmls' => '',
        'lo-location' => ', ',
        'lo-email' => '',
        'lo-phone' => '',
        'lo-imageurl' => 'https://cloud.cmgfi.com/dvbdysuf5/image/upload/v1571538212/CMG_Web_Resources/LO_Images/photo-placeholder.png',
        'lo-applynow' => '',
        'lo-mysite' => '',
        'lo-logo' => '',
    ]);
    $iframeSrc = 'https://www.primcomortgage.com/calculator/iframe-widget?' . $iframeQuery;
@endphp

<section id="home-loan-calculator" class="tax-hl-calc">
    <div class="container">
        <header class="tax-hl-calc__header">
            <h2 class="tax-hl-calc__title">Home Loan Calculator</h2>
            <p class="tax-hl-calc__lead">Get an estimate of your monthly payments and total loan costs</p>
        </header>
        <div class="tax-hl-calc__frame-wrap">
            <iframe
                title="Home loan mortgage calculator"
                class="tax-hl-calc__iframe"
                src="{{ $iframeSrc }}"
                width="100%"
                height="1000"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allow="fullscreen"
            ></iframe>
        </div>
    </div>
</section>
