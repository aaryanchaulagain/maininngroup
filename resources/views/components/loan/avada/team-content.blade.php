@php
    $cdn = 'https://innovativewealth.com.au/wp-content/uploads';
    $members = [
        [
            'name' => 'Shamim Anwar',
            'role' => 'MORTGAGE & FINANCE SPECIALIST, JP',
            'photo' => $cdn.'/2020/12/shamim_anwar5-217x300.jpg',
            'photo_srcset' => $cdn.'/2020/12/shamim_anwar5-200x276.jpg 200w, '.$cdn.'/2020/12/shamim_anwar5-400x552.jpg 400w, '.$cdn.'/2020/12/shamim_anwar5-600x828.jpg 600w, '.$cdn.'/2020/12/shamim_anwar5-800x1104.jpg 800w, '.$cdn.'/2020/12/shamim_anwar5.jpg 1080w',
            'bio' => [
                'My mission and vision is to help and motivate people especially Nepalese youth around the world. My efforts are focused to empower youth with right direction. I can Visualize a world free from suicides, depression, anger, hate and hurt.',
                'Shamim is an Entrepreneur, Leadership, Life Coach and Motivational Speaker. Driven by his passion for bringing positive change in individuals. He attended event with some of the world renowned life coach and entrepreneurs like Tony Robins, Richard Branson, Robert Kiyosaki, Dr John Demartini and dozens more.',
            ],
        ],
        [
            'name' => 'Dila Kharel',
            'role' => 'Lic. Accounting & Tax Agent',
            'photo' => $cdn.'/2020/12/dila_kharel.jpg',
            'photo_srcset' => null,
            'bio' => [
                'Dila is an accountant, certified mortgage consultant, and financial advisor by profession. A young entrepreneur with a wide range of knowledge in the mortgage and finance industry, he has been involved in accounting, business advisory, mortgage & financial services. In 2011 Dila establish Innovative Associates, which provides mortgage (Home Loans – Residential, Commercial, Construction Car Loans, Personal Loans), Accounting, Bookkeeping, and Business Advisory services to his all scales clients.',
            ],
        ],
    ];
@endphp

<section class="loan-team fusion-fullwidth fullwidth-box nonhundred-percent-fullwidth">
    <div class="loan-team__container">
        <header class="loan-team__header">
            <h2 class="loan-team__title">Team</h2>
            <img class="loan-team__icon" src="{{ $cdn }}/2020/08/mortgage-advice-icon.jpg" width="70" height="55" alt="Mortgage Advice">
            <p class="loan-team__placeholder">Your Content Goes Here</p>
        </header>

        <div class="loan-team__grid">
            @foreach ($members as $member)
                <article class="loan-team__member">
                    <div class="loan-team__photo-wrap">
                        <img
                            class="loan-team__photo"
                            src="{{ $member['photo'] }}"
                            @if ($member['photo_srcset']) srcset="{{ $member['photo_srcset'] }}" sizes="(max-width: 640px) 100vw, 300px" @endif
                            alt="{{ $member['name'] }}"
                            width="{{ $loop->first ? '217' : '168' }}"
                            height="300"
                            loading="lazy"
                            decoding="async">
                    </div>
                    <div class="loan-team__details">
                        <h3 class="loan-team__name">{{ $member['name'] }}</h3>
                        <p class="loan-team__role">{{ $member['role'] }}</p>
                        <div class="loan-team__bio">
                            @foreach ($member['bio'] as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach
                        </div>
                        <hr class="loan-team__sep" aria-hidden="true">
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
