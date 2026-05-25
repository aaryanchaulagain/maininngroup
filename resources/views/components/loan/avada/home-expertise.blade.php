@props(['showHeader' => true])

@php
    $cdn = 'https://innovativewealth.com.au/wp-content/uploads';
    $cards = [
        ['icon' => 'fa-house-user', 'title' => 'First Home', 'slug' => 'home-loan', 'text' => 'Ready to buy your first home? Let us Help! Contact us today and get a free consultation. We\'ll hold your hand until you moved in.', 'tone' => 'light'],
        ['icon' => 'fa-hand-holding-usd', 'title' => 'Refinance', 'slug' => 'refinancing', 'text' => 'Refinance to get your home loan rates even lower, cash back and consolidate all your loans into one and save thousands!', 'tone' => 'dark', 'stagger' => true],
        ['icon' => 'fa-chart-line', 'title' => 'Investments', 'slug' => 'investment-loan', 'text' => 'One property is never enough to retire comfortably. Invest now in appreciating assets to build your property portfolio.', 'tone' => 'light'],
        ['icon' => 'fa-home', 'title' => 'Mortgage and Loan', 'slug' => 'mortgage-and-loan', 'text' => 'Smart Loans Designed For Property Success. Access tailored mortgage and loan solutions designed to support your property goals with confidence.', 'tone' => 'dark'],
        ['icon' => 'fa-user-tie', 'title' => 'Self Employed', 'slug' => 'commercial-finance', 'text' => 'Are you a business owner and finding a hard to get a loan? Let us help you about how you can get a loan as business owner.', 'tone' => 'light', 'stagger' => true],
        ['icon' => 'fa-allergies', 'title' => 'SMSF', 'slug' => 'investment-loan', 'text' => 'Use your superannuation to purchase property. We can arrange loans under self-managed super fund to purchase your next investment property.', 'tone' => 'dark'],
    ];
@endphp

<section class="loan-home-expertise" aria-labelledby="{{ $showHeader ? 'loan-expertise-title' : 'loan-services-grid-title' }}">
    <div class="loan-home-expertise__container">
        @if ($showHeader)
            <header class="loan-home-expertise__header">
                <h2 id="loan-expertise-title" class="loan-home-expertise__title">Areas of Expertise</h2>
                <img class="loan-home-expertise__separator" src="{{ $cdn }}/2020/08/slant-separator.png" width="141" height="30" alt="">
                <p class="loan-home-expertise__intro">We pride ourselves to provide loan pre-approval to property, and accounting to all taxation matters. We'll hold your hand and guide you in each step to build your wealth through properties and taxation matters.</p>
            </header>
        @else
            <h2 id="loan-services-grid-title" class="screen-reader-text">Finance services</h2>
        @endif

        <div class="loan-home-expertise__grid">
            @foreach ($cards as $card)
                <article class="loan-home-expertise__card loan-home-expertise__card--{{ $card['tone'] }}{{ !empty($card['stagger']) ? ' loan-home-expertise__card--stagger' : '' }}">
                    <i class="loan-home-expertise__icon fas {{ $card['icon'] }}" aria-hidden="true"></i>
                    <h3 class="loan-home-expertise__card-title">
                        @if (!empty($card['slug']))
                            <a href="{{ route('loan.services.show', $card['slug']) }}">{{ $card['title'] }}</a>
                        @else
                            {{ $card['title'] }}
                        @endif
                    </h3>
                    <p class="loan-home-expertise__card-text">{{ $card['text'] }}</p>
                </article>
            @endforeach
        </div>

        <footer class="loan-home-expertise__footer">
            <p class="loan-home-expertise__outro">We don't just organise your loan, but also a property, and we'll be there after your loan. We will help and guide you in accounting and taxation matters. We'll help you to build your assets and guide you in how can you manage and reduce your taxation.</p>
            <a class="loan-home-expertise__cta" href="{{ route('loan.contact') }}">CONTACT US TODAY</a>
        </footer>
    </div>
</section>
