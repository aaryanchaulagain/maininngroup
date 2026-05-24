@props(['service'])

<section class="loan-finance-svc">
    <div class="loan-finance-svc__hero">
        <div class="loan-finance-svc__hero-inner">
            <span class="loan-finance-svc__icon"><i class="fas {{ $service['icon'] }}" aria-hidden="true"></i></span>
            <h1 class="loan-finance-svc__title">{{ $service['title'] }}</h1>
            <p class="loan-finance-svc__tagline">{{ $service['tagline'] }}</p>
            @foreach ($service['intro'] as $paragraph)
                <p class="loan-finance-svc__lead">{{ $paragraph }}</p>
            @endforeach
            <a href="{{ route('loan.contact') }}" class="loan-finance-svc__cta">Speak with a finance specialist</a>
        </div>
    </div>

    <div class="loan-finance-svc__body">
        <div class="loan-finance-svc__body-inner">
            <h2 class="loan-finance-svc__heading">How we can help</h2>
            <ul class="loan-finance-svc__list">
                @foreach ($service['highlights'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
            <p class="loan-finance-svc__contact">
                <a href="{{ route('loan.contact') }}">Contact us today</a> for a free consultation tailored to your situation.
            </p>
        </div>
    </div>
</section>
