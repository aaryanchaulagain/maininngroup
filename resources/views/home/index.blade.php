@extends('layouts.main')

@section('title', 'Innovative Group – Accounting Tax Finance and Remittance')

@section('content')
    @php
        $heroPath = public_path('assets/images/main/hero2-bw.png');
        $heroBg = is_file($heroPath)
            ? asset('assets/images/main/hero2-bw.png').'?v='.filemtime($heroPath)
            : null;
        $heroStyle = $heroBg
            ? "background-image: url('{$heroBg}')"
            : 'background-image: linear-gradient(135deg, #062a45 0%, #084a79 45%, #0a5f96 100%)';

        $touchUrl = route('main.contact');
        $taxUrl = domain_url('tax', '/');
        $loanUrl = domain_url('loan', '/');
        $advisoryUrl = domain_url('advisory', '/');

        $expertiseItems = [
            ['iconClass' => 'fa-solid fa-file-invoice-dollar', 'title' => 'Accounting', 'text' => 'We are dedicated to providing quality, professional accounting solutions to small and medium business.', 'variant' => 'dark', 'href' => $taxUrl],
            ['iconClass' => 'fa-solid fa-landmark', 'title' => 'Taxation', 'text' => 'From individual to company, all the taxation matter at one place.', 'variant' => 'gradient', 'href' => $taxUrl],
            ['iconClass' => 'fa-solid fa-house-chimney', 'title' => 'Home Loans', 'text' => "First home buyers, investment, refinance or commercials, we'll take care of you.", 'variant' => 'dark', 'href' => $loanUrl],
            ['iconClass' => 'fa-solid fa-shield-halved', 'title' => 'Insurances', 'text' => 'Personal insurance, life insurance or any other insurance matters we have associated experts to guide you.', 'variant' => 'gradient', 'href' => $touchUrl],
            ['iconClass' => 'fa-solid fa-scale-balanced', 'title' => 'Book keeping <span class="special_amp">&amp;</span> Payroll', 'text' => 'We specialise in providing customised, flexible and cost effective bookkeeping solutions for our clients.', 'variant' => 'dark', 'href' => $taxUrl],
            ['iconClass' => 'fa-solid fa-chart-line', 'title' => 'Business Advisory', 'text' => 'Whether you want to invest or refinance, we help you plan, grow, and meet your legal and corporate obligations.', 'variant' => 'gradient', 'href' => $advisoryUrl],
        ];
    @endphp

    <x-main.site-header active="home" />

    {{-- Hero --}}
    <section class="inn-main-hero relative bg-cover bg-center bg-no-repeat" style="{{ $heroStyle }}">
        <div class="inn-main-hero__overlay"></div>
        <div class="inn-main-hero__inner">
            <div class="inn-main-hero__headline fade-in">
                <p class="text-lg sm:text-xl font-light mb-3 opacity-90">Our Goal</p>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight font-display-main">To put you first and serve you best</h1>
                <div class="mt-5 flex justify-center"><span class="h-0.5 w-20 bg-white/60"></span></div>
            </div>
            <div class="inn-main-hero__cards grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-main.service-card
                    variant="white"
                    animate="slide-left"
                    :href="$taxUrl"
                    title="Accounting <span class='special_amp'>&amp;</span> Taxation"
                    text="We are dedicated to providing quality, professional accounting solutions to small and medium business. Our expert accounting and taxation services help streamline financial processes, ensure compliance, and support sustainable business growth."
                    button-label="Innovative Tax" />
                <x-main.service-card
                    variant="gradient-mid"
                    animate="fade-in"
                    :href="$loanUrl"
                    title="Home Loans"
                    text="Whether you're first home buyer or simply buying an investment property to build your portfolio. We'll present you the best product available in the market and hold your hand along the way."
                    button-label="Innovative Finance" />
                <x-main.service-card
                    variant="gradient-dark"
                    animate="slide-right"
                    :href="$advisoryUrl"
                    title="Business Advisory"
                    text="Our business advisory services provide strategic guidance to help businesses overcome challenges, improve performance, and unlock growth opportunities. We work closely with clients to deliver practical solutions that drive efficiency, profitability, and long-term success."
                    button-label="Innovative Advisory" />
            </div>
        </div>
    </section>

    {{-- How we operate --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 fade-in">
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 font-display-main">How we operate for you</h2>
                <div class="mt-4 flex items-center justify-center gap-4">
                    <span class="h-px w-16 bg-gray-200"></span>
                    <i class="fa-solid fa-scale-balanced text-[#072f4c] text-xl" aria-hidden="true"></i>
                    <span class="h-px w-16 bg-gray-200"></span>
                </div>
                <p class="mt-5 text-gray-500 max-w-2xl mx-auto">We put you first and serve you the best. Whether to be accounting, tax, book-keeping, home loans or an insurance. We will hold your hand guide you all the way.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <x-main.operate-card
                    animate="slide-left"
                    image="assets/images/how-we-operate/contact.svg"
                    image-alt="Contact by mail or phone"
                    heading="Get in touch by mail or phone"
                    text="Call us now or simply email us at info@inngroup.com.au and we shall get back to you shortly." />
                <x-main.operate-card
                    animate="fade-in"
                    image="assets/images/how-we-operate/consultation.svg"
                    image-alt="Free personal consultation"
                    heading="Free personal consultation"
                    text="Whether you want accounting, taxation or home loans, there are no charges to you, it's free consultation." />
                <x-main.operate-card
                    animate="slide-right"
                    image="assets/images/how-we-operate/support.svg"
                    image-alt="Hold your hand — ongoing support"
                    heading="Hold your hand"
                    text="After the consultation, we'll hold your hand all the way until your matter is settled. We put you first, until needs are serve the best." />
            </div>
        </div>
    </section>

    {{-- Mission CTA --}}
    <section class="py-16 text-white text-center bg-gradient-to-br from-[#094978] to-[#105e96]">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 fade-in">
            <h2 class="text-3xl sm:text-4xl font-bold mb-3 font-display-main">Our mission to put you the first, and serve you the best</h2>
            <p class="text-white/80 mb-8">And, we will hold your hand until your matter is settled.</p>
            <div class="h-0.5 w-16 bg-white/40 mx-auto mb-8"></div>
            <a href="{{ $touchUrl }}" class="hero-btn inline-flex items-center gap-2 bg-white text-[#094978] font-semibold px-8 py-4 rounded-full hover:bg-gray-100">
                Get in touch
                <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
            </a>
        </div>
    </section>

    {{-- Areas of expertise --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 fade-in">
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 font-display-main">Areas of expertise</h2>
                <div class="mt-4 flex items-center justify-center gap-4">
                    <span class="h-px w-16 bg-gray-200"></span>
                    <i class="fa-solid fa-scale-balanced text-[#072f4c] text-xl" aria-hidden="true"></i>
                    <span class="h-px w-16 bg-gray-200"></span>
                </div>
                <p class="mt-5 text-gray-500">With years of experience, we're able to assist and guide you in many areas of our expertise.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($expertiseItems as $item)
                    <x-main.expertise-card
                        :icon-class="$item['iconClass']"
                        :title="$item['title']"
                        :text="$item['text']"
                        :href="$item['href']"
                        :variant="$item['variant']" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="py-16 text-white bg-gradient-to-br from-[#094978] to-[#105e96]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="stat-item fade-in"><p class="text-4xl sm:text-5xl font-bold mb-2">10,000+</p><p class="text-white/70 text-sm">Client served</p></div>
                <div class="stat-item fade-in"><p class="text-4xl sm:text-5xl font-bold mb-2">25+</p><p class="text-white/70 text-sm">Years of experience</p></div>
                <div class="stat-item fade-in"><p class="text-4xl sm:text-5xl font-bold mb-2">9/5</p><p class="text-white/70 text-sm">Availability &amp; Support</p></div>
                <div class="stat-item fade-in"><p class="text-4xl sm:text-5xl font-bold mb-2">$100M+</p><p class="text-white/70 text-sm">Settled for our clients</p></div>
            </div>
        </div>
    </section>

    <x-main.site-footer />

    @push('scripts')
        <script>
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, i) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => entry.target.classList.add('visible'), i * 100);
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.fade-in, .slide-left, .slide-right').forEach(el => observer.observe(el));
        </script>
    @endpush
@endsection
