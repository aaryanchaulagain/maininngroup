@php
    $assetBase = 'https://innovativeassociates.com.au/wp-content/uploads';
    $exploreLinks = [
        ['label' => 'Australian Taxation Office', 'url' => 'https://www.ato.gov.au/'],
        ['label' => 'Tax Practitioners Board', 'url' => 'https://www.tpb.gov.au/'],
        ['label' => 'Department of Immigration', 'url' => 'https://www.homeaffairs.gov.au/'],
        ['label' => 'CPA Austalia', 'url' => 'https://www.cpaaustralia.com.au/'],
        ['label' => 'NSW Office of State Revenue', 'url' => 'https://www.revenue.nsw.gov.au/'],
        ['label' => 'Institute of Public Accountants', 'url' => 'https://www.publicaccountants.org.au/'],
        ['label' => 'MFAA', 'url' => 'https://www.mfaa.com.au/'],
        ['label' => 'ACT Revenue Office', 'url' => 'https://www.revenue.act.gov.au/'],
    ];
@endphp

<footer class="tax-inn-site-footer">
    <div class="tax-inn-site-footer__grid container-wide px-4 lg:px-8">
        <div>
            <h2>Explore</h2>
            <ul>
                @foreach ($exploreLinks as $link)
                    <li><a href="{{ $link['url'] }}" target="_blank" rel="noopener">{{ $link['label'] }}</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <h2>Contact</h2>
            <ul>
                <li><a href="mailto:info@innovativeassociates.com.au">info@innovativeassociates.com.au</a></li>
                <li><a href="tel:0434392347">0434 392 347</a></li>
                <li>Suite 101, Level 10 – 420-426 Pitt Street, Sydney, NSW – 2000</li>
            </ul>
        </div>
        <div>
            <h2>Member of</h2>
            <p class="mt-4 leading-relaxed">
                Our firm is a proactive and progressive Mortgage, finance and Accounting firm offering full range of services on Mortgage Industry, finance Industry and accounting, taxation and business advisory work.
            </p>
            <div class="mt-6 flex flex-wrap gap-3">
                <img src="{{ $assetBase }}/2021/05/MFAA-1-150x150.jpg" alt="MFAA" class="h-14 rounded bg-white p-1">
                <img src="{{ $assetBase }}/2021/05/institue-ofpublic-accountans-150x150.jpg" alt="IPA" class="h-14 rounded bg-white p-1">
                <img src="{{ $assetBase }}/2021/05/tax-practitioners-board-150x150.jpg" alt="TPB" class="h-14 rounded bg-white p-1">
            </div>
        </div>
    </div>
    <p class="tax-inn-site-footer__copy px-4">
        All rights reserved to Innovative Associate. Site designed by
        <a href="https://ausnepit.com.au/" target="_blank" rel="noopener" class="text-orange-400 hover:underline">AusNep IT Solutions</a>
    </p>
</footer>
