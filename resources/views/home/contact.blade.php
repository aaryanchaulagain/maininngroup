@extends('layouts.main-enfold')

@section('title', 'Contact – Innovative Group')
@section('html-entry-class', 'html_entry_id_954')
@section('body-class', 'wp-singular page-template-default page page-id-954 wp-theme-enfold rtl_columns stretched cormorant_garamond open_sans no_sidebar_border')

@push('head')
    <link rel="stylesheet" href="https://inngroup.com.au/wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/contact/contact.css?ver=6.9.4">
@endpush

@section('content')
@include('components.main.enfold.header', ['active' => 'contact', 'entryId' => '954'])

<div id="main" class="all_colors" data-scroll-offset="130">

    <div id="av-layout-grid-1" class="av-layout-grid-container entry-content-wrapper main_color av-fixed-cells avia-builder-el-1 el_before_av_section submenu-not-first container_wrap fullsize">
        <div class="flex_cell no_margin av_one_half avia-builder-el-first" style="vertical-align:top; padding:9px 0 0; background-color:#2388c2;">
            <div class="flex_cell_inner"></div>
        </div>
        <div class="flex_cell no_margin av_one_half avia-builder-el-last" style="vertical-align:top; padding:9px 0 0; background-color:#5fb4e4;">
            <div class="flex_cell_inner"></div>
        </div>
    </div>

    <div id="av_section_1" class="avia-section main_color avia-section-huge avia-no-border-styling avia-bg-style-scroll avia-builder-el-last container_wrap fullsize">
        <div class="container">
            <div class="template-page content av-content-full alpha units">
                <div class="post-entry post-entry-type-page post-entry-954">
                    <div class="entry-content-wrapper clearfix">
                        <div class="flex_column_table av-equal-height-column-flextable -flextable" style="margin-top:-200px; margin-bottom:0px;">
                            <div class="flex_column av_one_third no_margin flex_column_table_cell av-equal-height-column av-align-top first avia-builder-el-first" style="padding:40px; border-radius:0px;"></div>
                            <div class="flex_column av_one_third no_margin flex_column_table_cell av-equal-height-column av-align-top" style="padding:40px; background-color:#379cd6; border-radius:0px;">
                                <span class="inn-contact-badge-icon" aria-hidden="true">
                                    <i class="fa-solid fa-headset"></i>
                                </span>
                                <div style="height:20px" class="hr hr-invisible"><span class="hr-inner"><span class="hr-inner-style"></span></span></div>
                                <section class="av_textblock_section" itemscope itemtype="https://schema.org/CreativeWork">
                                    <div class="avia_textblock av_inherit_color" style="color:#ffffff;" itemprop="text">
                                        <h4 style="text-align: center;">Contact</h4>
                                        <p style="text-align: center;">Innovative</p>
                                    </div>
                                </section>
                                <div style="height:8px" class="hr hr-invisible avia-builder-el-last"><span class="hr-inner"><span class="hr-inner-style"></span></span></div>
                            </div>
                            <div class="flex_column av_one_third no_margin flex_column_table_cell av-equal-height-column av-align-top" style="padding:40px; border-radius:0px;"></div>
                        </div>

                        <div class="flex_column av_one_half av-animated-generic bottom-to-top flex_column_div av-zero-column-padding first column-top-margin" style="border-radius:0px;">
                            <div style="padding-bottom:20px; font-size:34px;" class="av-special-heading av-special-heading-h3 blockquote modern-quote avia-builder-el-first av-inherit-size">
                                <div class="av-subheading av-subheading_above" style="font-size:15px;"><p>Hello</p></div>
                                <h3 class="av-special-heading-tag" itemprop="headline">Make an appointment</h3>
                                <div class="special-heading-border"><div class="special-heading-inner-border"></div></div>
                            </div>
                            @include('components.main.enfold.contact-form')
                        </div>

                        <div class="flex_column av_one_half av-animated-generic bottom-to-top flex_column_div av-zero-column-padding column-top-margin avia-builder-el-last" style="border-radius:0px;">
                            <div style="padding-bottom:20px; font-size:34px;" class="av-special-heading av-special-heading-h3 blockquote modern-quote avia-builder-el-first av-inherit-size">
                                <div class="av-subheading av-subheading_above" style="font-size:15px;"><p>Nationwide</p></div>
                                <h3 class="av-special-heading-tag" itemprop="headline">Where you can find us</h3>
                                <div class="special-heading-border"><div class="special-heading-inner-border"></div></div>
                            </div>
                            <section class="av_textblock_section" itemscope itemtype="https://schema.org/CreativeWork">
                                <div class="avia_textblock" itemprop="text">
                                    <p style="text-align: center;"><strong>Sydney – HEAD OFFICE</strong></p>
                                    <p style="text-align: center;">Suite 101, Level 10, 420 Pitt Street, Sydney NSW 2222<br>Phone: +61 02 8592 1165 | Mob: 0403 054 593 (Shamim), 0434 392 347 (Dila) | Email: info@inngroup.com.au</p>
                                    <p style="text-align: center;"><strong>CANBERRA</strong><br>+61</p>
                                    <p style="text-align: center;"><strong>DARWIN</strong><br>+61</p>
                                    <p style="text-align: center;"><strong>PERTH</strong><br>+61</p>
                                    <p style="text-align: center;"><strong>TASMANIA</strong><br>+61</p>
                                </div>
                            </section>
                            <section class="av_textblock_section" itemscope itemtype="https://schema.org/CreativeWork">
                                <div class="avia_textblock" itemprop="text">
                                    <p>Australia wide presence</p>
                                    <blockquote>
                                        <p>So that, we could serve you the best, we have made our presence nationwide. Get in touch with one of our local office in your city.</p>
                                    </blockquote>
                                    <p>As our mission, we put you the first, to ensure we serve you the best.</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('components.main.enfold.footer')

@endsection

@push('scripts')
<script src="https://inngroup.com.au/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3"></script>
<script src="https://inngroup.com.au/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.3"></script>
<script>
    var AviaDatepickerTranslation = {
        closeText: "Close",
        currentText: "Today",
        nextText: "Next",
        prevText: "Prev",
        monthNames: ["January","February","March","April","May","June","July","August","September","October","November","December"],
        monthNamesShort: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
        dayNames: ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
        dayNamesShort: ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],
        dayNamesMin: ["S","M","T","W","T","F","S"],
        dateFormat: "dd / mm / yy",
        firstDay: "1",
        isRTL: ""
    };
    jQuery(function ($) {
        $(".avia_datepicker").datepicker({
            beforeShow: function (input, inst) {
                $("#ui-datepicker-div").addClass(this.id);
                inst.dpDiv.addClass("avia-datepicker-div");
            },
            showButtonPanel: true,
            closeText: AviaDatepickerTranslation.closeText,
            currentText: AviaDatepickerTranslation.currentText,
            nextText: AviaDatepickerTranslation.nextText,
            prevText: AviaDatepickerTranslation.prevText,
            monthNames: AviaDatepickerTranslation.monthNames,
            monthNamesShort: AviaDatepickerTranslation.monthNamesShort,
            dayNamesMin: AviaDatepickerTranslation.dayNamesMin,
            dayNames: AviaDatepickerTranslation.dayNames,
            dateFormat: AviaDatepickerTranslation.dateFormat,
            firstDay: AviaDatepickerTranslation.firstDay,
            isRTL: AviaDatepickerTranslation.isRTL,
            changeMonth: true,
            changeYear: true,
            yearRange: "c-80:c+10"
        });
    });
</script>
@endpush
