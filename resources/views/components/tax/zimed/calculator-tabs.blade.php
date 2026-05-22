@php
    $tabs = [
        ['label' => 'Stamp Duty Calculator', 'src' => 'https://www.visionabacus.com/Finance/Australia/1/SuiteA100/640/Stamp-Duty-Calculator.aspx?ID=MFAA', 'type' => 'vision'],
        ['label' => 'Split Loan Calculator', 'src' => 'https://www.visionabacus.com/Finance/Australia/1/SuiteA100/640/Split-Loan-Calculator.aspx?ID=MFAA', 'type' => 'vision'],
        ['label' => 'Saving Calculator', 'src' => 'https://www.visionabacus.com/Finance/Australia/1/SuiteA100/640/Saving-Calculator.aspx?ID=MFAA', 'type' => 'vision'],
        ['label' => 'Property Selling Cost Calculator', 'src' => 'https://www.visionabacus.com/Finance/Australia/1/SuiteA100/640/Property-Selling-Cost-Calculator.aspx?ID=MFAA', 'type' => 'vision'],
        ['label' => 'Lump Sum Calculator', 'src' => 'https://www.visionabacus.com/Finance/Australia/1/SuiteA100/640/Lump-Sum-Repayment-Calculator.aspx?ID=MFAA', 'type' => 'vision'],
        ['label' => 'Loan Repayment Calculator', 'src' => 'https://www.visionabacus.com/Finance/Australia/1/SuiteA100/640/Loan-Repayment-Calculator.aspx?ID=MFAA', 'type' => 'vision'],
        ['label' => 'Loan Comparison Calculator', 'src' => 'https://www.visionabacus.com/Finance/Australia/1/SuiteA100/640/Loan-Comparison-Calculator.aspx?ID=AFGOnline', 'type' => 'vision'],
        ['label' => 'Income Tax Calculator', 'src' => 'https://form.jotform.com/230954821634862', 'type' => 'jotform'],
        ['label' => 'Home Loan Offset Calculator', 'src' => 'https://www.visionabacus.com/Finance/Australia/1/SuiteA100/640/Home-Loan-Offset-Calculator.aspx?ID=MFAA', 'type' => 'vision'],
        ['label' => 'Extra Repayment Calculator', 'src' => 'https://www.visionabacus.com/Finance/Australia/1/SuiteA100/640/Extra_Repayment_Calculator.aspx?ID=MFAA', 'type' => 'vision'],
        ['label' => 'Comparison Rate Calculator', 'src' => 'https://www.visionabacus.com/Finance/Australia/1/SuiteA100/640/Comparison-Rate-Calculator.aspx?ID=MFAA', 'type' => 'vision'],
    ];
@endphp

<div class="elementor-element elementor-tabs-view-vertical elementor-widget elementor-widget-tabs tax-calculator-tabs">
    <div class="elementor-widget-container">
        <div class="elementor-tabs">
            <div class="elementor-tabs-wrapper" role="tablist">
                @foreach ($tabs as $index => $tab)
                    @php $tabId = $index + 1; @endphp
                    <div
                        id="elementor-tab-title-220{{ $tabId }}"
                        class="elementor-tab-title elementor-tab-desktop-title {{ $tabId === 1 ? 'elementor-active' : '' }}"
                        aria-selected="{{ $tabId === 1 ? 'true' : 'false' }}"
                        data-tab="{{ $tabId }}"
                        role="tab"
                        tabindex="{{ $tabId === 1 ? '0' : '-1' }}"
                        aria-controls="elementor-tab-content-220{{ $tabId }}"
                    >{{ $tab['label'] }}</div>
                @endforeach
            </div>

            <div class="elementor-tabs-content-wrapper" role="tablist" aria-orientation="vertical">
                @foreach ($tabs as $index => $tab)
                    @php $tabId = $index + 1; @endphp
                    <div
                        class="elementor-tab-title elementor-tab-mobile-title {{ $tabId === 1 ? 'elementor-active' : '' }}"
                        aria-selected="{{ $tabId === 1 ? 'true' : 'false' }}"
                        data-tab="{{ $tabId }}"
                        role="tab"
                        tabindex="{{ $tabId === 1 ? '0' : '-1' }}"
                        aria-controls="elementor-tab-content-220{{ $tabId }}"
                    >{{ $tab['label'] }}</div>

                    <div
                        id="elementor-tab-content-220{{ $tabId }}"
                        class="elementor-tab-content elementor-clearfix {{ $tabId === 1 ? 'elementor-active' : '' }}"
                        data-tab="{{ $tabId }}"
                        role="tabpanel"
                        aria-labelledby="elementor-tab-title-220{{ $tabId }}"
                        tabindex="0"
                        @if($tabId !== 1) hidden @endif
                    >
                        @if ($tab['type'] === 'jotform')
                            <iframe
                                id="JotFormIFrame-230954821634862"
                                class="tax-calculator-tabs__iframe tax-calculator-tabs__iframe--jotform"
                                title="Basic Income Tax Calculator"
                                src="{{ $tab['src'] }}"
                                frameborder="0"
                                scrolling="no"
                                allowfullscreen
                            ></iframe>
                        @else
                            <iframe
                                class="tax-calculator-tabs__iframe"
                                src="{{ $tab['src'] }}"
                                title="{{ $tab['label'] }}"
                                width="100%"
                                height="615"
                                allowfullscreen
                            ></iframe>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
