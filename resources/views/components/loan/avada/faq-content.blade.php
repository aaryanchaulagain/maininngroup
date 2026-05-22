@php
    $contactUrl = route('loan.contact');
    $replaceContact = fn (string $html) => str_replace('__CONTACT__', $contactUrl, $html);

    if (isset($faqs) && $faqs->count() > 0) {
        $items = $faqs->map(fn ($faq) => [
            'question' => $faq->question,
            'answer' => $replaceContact($faq->answer),
        ]);
    } else {
        $items = collect(config('loan_faq.items', []))->map(fn ($item) => [
            'question' => $item['question'],
            'answer' => $replaceContact($item['answer']),
        ]);
    }

    $intro = config('loan_faq.intro');
@endphp

<section class="loan-faq fusion-fullwidth fullwidth-box nonhundred-percent-fullwidth">
    <div class="loan-faq__container">
        <h2 class="loan-faq__title">Frequently Asked Questions</h2>
        <p class="loan-faq__intro">{{ $intro }}</p>
        <hr class="loan-faq__intro-sep" aria-hidden="true">

        <div class="loan-faq__accordion fusion-accordian" id="loan-faq-accordion">
            @foreach ($items as $index => $item)
                <details class="loan-faq__panel fusion-panel panel-default">
                    <summary class="loan-faq__heading panel-title toggle">
                        <span class="loan-faq__icon fusion-toggle-icon-wrapper" aria-hidden="true">
                            <span class="loan-faq__icon-box fa-fusion-box"></span>
                        </span>
                        <span class="loan-faq__question fusion-toggle-heading">{{ $item['question'] }}</span>
                    </summary>
                    <div class="loan-faq__body panel-body toggle-content">
                        {!! $item['answer'] !!}
                    </div>
                </details>
            @endforeach
        </div>
    </div>
</section>
