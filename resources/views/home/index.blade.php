@extends('layouts.main-enfold')

@section('title', 'Innovative Group – Accounting Tax Finance and Remittance')

@section('content')
    @php
        $heroBg = 'https://i0.wp.com/inngroup.com.au/wp-content/uploads/2018/05/hero2-bw.png?fit=1800%2C750&ssl=1';
        $touchUrl = route('main.contact');
        // Learn more → tax / loan sites (hosts from DOMAIN_TAX / DOMAIN_LOAN in .env)
        $taxUrl = domain_url('tax', '/');
        $loanUrl = domain_url('loan', '/');
        $taxAdvisoryUrl = domain_url('tax', '/services/advisory');

        $expertiseRow1 = [
            [
                'iconClass' => 'fa-solid fa-file-invoice-dollar',
                'title' => 'Accounting',
                'text' =>
                    'We are dedicated to providing quality, professional accounting solutions to small and medium business.',
                'style' => 'dark',
                'href' => $taxUrl,
            ],
            [
                'iconClass' => 'fa-solid fa-landmark',
                'title' => 'Taxation',
                'text' => 'From individual to company, all the taxation matter at one place.',
                'style' => 'gradient',
                'href' => $taxUrl,
            ],
            [
                'iconClass' => 'fa-solid fa-house-chimney',
                'title' => 'Home Loans',
                'text' => "First home buyers, investment, refinance or commercials, we'll take care of you.",
                'style' => 'dark',
                'href' => $loanUrl,
            ],
        ];

        $expertiseRow2 = [
            [
                'iconClass' => 'fa-solid fa-shield-halved',
                'title' => 'Insurances',
                'text' =>
                    'Personal insurance, life insurance or any other insurance matters we have associated experts to guide you.',
                'style' => 'gradient',
                'href' => $touchUrl,
            ],
            [
                'iconClass' => 'fa-solid fa-scale-balanced',
                'title' => "Book keeping <span class='special_amp'>&amp;</span> payroll",
                'text' =>
                    'We specialise in providing customised, flexible and cost effective bookkeeping solutions for our clients.',
                'style' => 'dark',
                'href' => $taxUrl,
            ],
            [
                'iconClass' => 'fa-solid fa-chart-line',
                'title' => 'Business Advisory',
                'text' =>
                    'Whether you want to invest or refinance, we help you plan, grow, and meet your legal and corporate obligations.',
                'style' => 'gradient',
                'href' => $taxAdvisoryUrl,
            ],
        ];
    @endphp

    @include('components.main.enfold.header', ['active' => 'home', 'entryId' => '102'])

    <div id="main" class="all_colors" data-scroll-offset="130">

        {{-- Hero + 3 service columns --}}
        <div id="av_section_1"
            class="avia-section main_color avia-section-no-padding avia-no-border-styling avia-full-stretch av-section-color-overlay-active avia-bg-style-scroll av-minimum-height av-minimum-height-25 container_wrap fullsize"
            style="background-repeat: no-repeat; background-image: url({{ $heroBg }}); background-attachment: scroll; background-position: center center;"
            data-section-bg-repeat="stretch" data-av_minimum_height_pc="25">
            <div class="av-section-color-overlay-wrap">
                <div class="av-section-color-overlay" style="opacity: 0.6; background-color: #084a79;"></div>
                <div class="container">
                    <main role="main" itemprop="mainContentOfPage"
                        class="template-page content av-content-full alpha units">
                        <div class="post-entry post-entry-type-page post-entry-102">
                            <div class="entry-content-wrapper clearfix">
                                <div class="flex_column av_one_full av-animated-generic left-to-right flex_column_div av-zero-column-padding first avia-builder-el-first"
                                    style="margin-top:0px; margin-bottom:0px; border-radius:0px;">
                                    <div style="padding-bottom:0px; margin-top:150px; margin-bottom:150px; color:#ffffff;font-size:5vw;"
                                        class="av-special-heading av-special-heading-h2 custom-color-heading blockquote modern-quote modern-centered av-inherit-size">
                                        <div class="av-subheading av-subheading_above av_custom_color"
                                            style="font-size:25px;">
                                            <p>Our Goal</p>
                                        </div>
                                        <h2 class="av-special-heading-tag" itemprop="headline">To put you first and serve
                                            you best</h2>
                                        <div class="special-heading-border">
                                            <div class="special-heading-inner-border" style="border-color:#ffffff"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex_column_table av-equal-height-column-flextable -flextable"
                                    style="margin-top:0px; margin-bottom:70px;">
                                    <x-main.enfold.service-card :href="$taxUrl"
                                        title="Accounting <span class='special_amp'>&amp;</span> Taxation"
                                        text="We are dedicated to providing quality, professional accounting solutions to small and medium business. Our expert accounting and taxation services help streamline financial processes, ensure compliance, and support sustainable business growth."
                                        style="white"
                                        button-label="Innovative Tax" />
                                    <x-main.enfold.service-card :href="$loanUrl" title="Home Loans"
                                        text="Whether you're first home buyer or simply buying an investment property to build your portfolio. We'll present you the best product available in the market and hold your hand along the way."
                                        style="gradient-mid"
                                        button-label="Innovative Loan" />
                                    <x-main.enfold.service-card :href="$touchUrl" title="Business Advisory"
                                        text="Our business advisory services provide strategic guidance to help businesses overcome challenges, improve performance, and unlock growth opportunities. We work closely with clients to deliver practical solutions that drive efficiency, profitability, and long-term success."
                                        style="gradient-dark" />
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

        {{-- How we operate --}}
        <div id="av_section_2"
            class="avia-section main_color avia-section-huge avia-no-border-styling avia-bg-style-scroll container_wrap fullsize">
            <div class="container">
                <div class="template-page content av-content-full alpha units">
                    <div class="post-entry post-entry-type-page post-entry-102">
                        <div class="entry-content-wrapper clearfix">
                            <div style="padding-bottom:0px; margin:0 0 0 0; font-size:50px;"
                                class="av-special-heading av-special-heading-h3 blockquote modern-quote modern-centered avia-builder-el-first av-inherit-size">
                                <h3 class="av-special-heading-tag" itemprop="headline">How we operate for you</h3>
                                <div class="special-heading-border">
                                    <div class="special-heading-inner-border"></div>
                                </div>
                            </div>
                            <section class="av_textblock_section" itemscope itemtype="https://schema.org/CreativeWork">
                                <div class="avia_textblock" itemprop="text">
                                    <p style="text-align: center;">We put you first and serve you the best. Whether to be
                                        accounting, tax, book-keeping, home loans or an insurance. We will hold your hand
                                        guide you all the way.</p>
                                </div>
                            </section>
                            @include('components.main.enfold.hr-justice')
                            <div class="flex_column_table av-equal-height-column-flextable -flextable inn-operate-columns">
                                <x-main.enfold.operate-card :first="true"
                                    image="assets/images/how-we-operate/contact.svg" image-alt="Contact by mail or phone"
                                    heading="Get in touch by mail or phone"
                                    text="Call us now or simply email us at info@inngroup.com.au and we shall get back to you shortly." />
                                <x-main.enfold.operate-card image="assets/images/how-we-operate/consultation.svg"
                                    image-alt="Free personal consultation" heading="Free personal consultation"
                                    text="Whether you want accounting, taxation or home loans, there are no charges to you, it's free consultation." />
                                <x-main.enfold.operate-card image="assets/images/how-we-operate/support.svg"
                                    image-alt="Hold your hand — ongoing support" heading="Hold your hand"
                                    text="After the consultation, we'll hold your hand all the way until your matter is settled. We put you first, until needs are serve the best." />
                            </div>
                            @include('components.main.enfold.hr-justice')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Mission CTA --}}
        <div id="av_section_3"
            class="avia-section main_color avia-section-default avia-no-border-styling avia-bg-style-scroll container_wrap fullsize"
            style="background-color: #094978; background-image: linear-gradient(45deg,#094978,#105e96);">
            <div class="container">
                <div class="template-page content av-content-full alpha units">
                    <div class="post-entry post-entry-type-page post-entry-102">
                        <div class="entry-content-wrapper clearfix">
                            <div class="flex_column_table av-equal-height-column-flextable -flextable">
                                <div class="flex_column av_one_full flex_column_table_cell av-equal-height-column av-align-middle av-zero-column-padding first"
                                    style="border-radius:0px;">
                                    <div style="padding-bottom:30px; color:#ffffff;font-size:27px;"
                                        class="av-special-heading av-special-heading-h4 custom-color-heading blockquote modern-quote modern-centered av-inherit-size avia-builder-el-first">
                                        <h4 class="av-special-heading-tag" itemprop="headline">Our mission to put you the
                                            first, and serve you the best</h4>
                                        <div class="av-subheading av-subheading_below av_custom_color"
                                            style="font-size:15px;">
                                            <p>And, we will hold your hand until your matter is settled.</p>
                                        </div>
                                        <div class="special-heading-border">
                                            <div class="special-heading-inner-border" style="border-color:#ffffff"></div>
                                        </div>
                                    </div>
                                    <div class="avia-button-wrap avia-button-center avia-builder-el-last">
                                        <a href="{{ $touchUrl }}"
                                            class="avia-button av-icon-on-hover avia-icon_select-yes-right-icon avia-size-large avia-position-center"
                                            style="background-color:#ffffff; border-color:#ffffff; color:#000000;">
                                            <span class="avia_iconbox_title">Get in touch</span>
                                            <span class="avia_button_icon avia_button_icon_right" aria-hidden="true"
                                                data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Areas of expertise --}}
        <div id="av_section_4"
            class="avia-section main_color avia-section-huge avia-no-border-styling avia-bg-style-scroll container_wrap fullsize">
            <div class="container">
                <div class="template-page content av-content-full alpha units">
                    <div class="post-entry post-entry-type-page post-entry-102">
                        <div class="entry-content-wrapper clearfix">
                            <div style="padding-bottom:0px; margin:0 0 0 0; font-size:50px;"
                                class="av-special-heading av-special-heading-h3 blockquote modern-quote modern-centered avia-builder-el-first av-inherit-size">
                                <h3 class="av-special-heading-tag" itemprop="headline">Areas of expertise</h3>
                                <div class="special-heading-border">
                                    <div class="special-heading-inner-border"></div>
                                </div>
                            </div>
                            <section class="av_textblock_section" itemscope itemtype="https://schema.org/CreativeWork">
                                <div class="avia_textblock" itemprop="text">
                                    <p style="text-align: center;">With years of experience, we're able to assist and guide
                                        you in many areas of our expertise.</p>
                                </div>
                            </section>
                            @include('components.main.enfold.hr-justice')
                            <div class="flex_column_table av-equal-height-column-flextable -flextable"
                                style="margin-top:0px; margin-bottom:0px;">
                                @foreach ($expertiseRow1 as $item)
                                    <x-main.enfold.expertise-card :icon-class="$item['iconClass']" :title="$item['title']" :text="$item['text']"
                                        :style="$item['style']" :href="$item['href']" />
                                    @if (!$loop->last)
                                        <div class="av-flex-placeholder"></div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="flex_column_table av-equal-height-column-flextable -flextable"
                                style="margin-top:6%; margin-bottom:0;">
                                @foreach ($expertiseRow2 as $item)
                                    <x-main.enfold.expertise-card :icon-class="$item['iconClass']" :title="$item['title']" :text="$item['text']"
                                        :style="$item['style']" :href="$item['href']" />
                                    @if (!$loop->last)
                                        <div class="av-flex-placeholder"></div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stats --}}
        <div id="av_section_5"
            class="avia-section main_color avia-section-default avia-no-border-styling avia-bg-style-scroll avia-builder-el-last container_wrap fullsize"
            style="background-color: #094978; background-image: linear-gradient(45deg,#094978,#105e96);">
            <div class="container">
                <div class="template-page content av-content-full alpha units">
                    <div class="post-entry post-entry-type-page post-entry-102">
                        <div class="entry-content-wrapper clearfix">
                            <div class="flex_column_table av-equal-height-column-flextable -flextable">
                                @foreach ([[['10', '000', '+'], 'Client served'], [['25', '+'], 'Years of experience'], [['9', '5'], 'Availability & Support'], [['100', '000', '000', '$+'], 'Settled for our clients']] as $i => [$parts, $label])
                                    <div class="flex_column av_one_fourth flex_column_table_cell av-equal-height-column av-align-middle av-zero-column-padding {{ $i === 0 ? 'first' : '' }}"
                                        style="border-radius:0px;">
                                        <div class="avia-animated-number av-force-default-color avia-color-font-light avia_animate_when_visible"
                                            data-timer="3000">
                                            <strong class="heading avia-animated-number-title">
                                                @foreach ($parts as $j => $part)
                                                    @if (in_array($part, [',', '-', '.', '$+', '+'], true))
                                                        <span class="avia-no-number">{{ $part }}</span>
                                                    @else
                                                        <span class="avia-single-number __av-single-number"
                                                            data-number="{{ $part }}"
                                                            data-start_from="0">{{ $part }}</span>
                                                    @endif
                                                @endforeach
                                            </strong>
                                            <div class="avia-animated-number-content">
                                                <p>{{ $label }}
                                            </div>
                                        </div>
                                    </div>
                                    @if ($i < 3)
                                        <div class="av-flex-placeholder"></div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('components.main.enfold.footer')

@endsection
