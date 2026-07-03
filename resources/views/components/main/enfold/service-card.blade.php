@props([
    'title',
    'text',
    'style' => 'white',
    'href' => '#',
    'learnUrl' => null,
    'buttonLabel' => 'Learn more',
])

@php
    $link = $learnUrl ?? $href;
    $styles = [
        'white' => 'background: #ffffff; padding:40px; background-color:#ffffff;',
        'gradient-mid' => 'background:linear-gradient(45deg,#094978,#105e96); padding:40px; background-color:#094978;',
        'gradient-dark' => 'background:linear-gradient(45deg,#072f4c,#0c4771); padding:40px; background-color:#072f4c;',
    ];
    $isDark = $style !== 'white';
    $boxStyle = $styles[$style] ?? $styles['white'];
@endphp

<div class="flex_column av_one_third av-animated-generic left-to-right no_margin flex_column_table_cell av-equal-height-column av-align-middle column-top-margin" style="{{ $boxStyle }} border-radius:0px;">
    <div style="padding-bottom:10px; {{ $isDark ? 'color:#ffffff;' : '' }}" class="av-special-heading av-special-heading-h2 custom-color-heading blockquote modern-quote modern-centered avia-builder-el-first">
        <h2 class="av-special-heading-tag" itemprop="headline">{!! $title !!}</h2>
        <div class="special-heading-border">
            <div class="special-heading-inner-border" @if($isDark) style="border-color:#ffffff" @endif></div>
        </div>
    </div>
    <section class="av_textblock_section" itemscope itemtype="https://schema.org/CreativeWork">
        <div class="avia_textblock {{ $isDark ? 'av_inherit_color' : '' }}" @if($isDark) style="color:#ffffff;" @endif itemprop="text">
            <p style="text-align: center;">{{ $text }}</p>
        </div>
    </section>
    <div style="height:20px" class="hr hr-invisible"><span class="hr-inner"><span class="hr-inner-style"></span></span></div>
    <div class="avia-button-wrap avia-button-center avia-builder-el-last">
        <a href="{{ $link }}" class="avia-button av-icon-on-hover avia-icon_select-yes-right-icon avia-size-large avia-position-center {{ $style === 'white' ? 'avia-color-theme-color' : '' }}" @if($isDark) style="background-color:#ffffff; border-color:#ffffff; color:#000000;" @endif>
            <span class="avia_iconbox_title">{{ $buttonLabel }}</span>
            <i class="fa-solid fa-arrow-right avia_button_icon_right" aria-hidden="true"></i>
        </a>
    </div>
</div>
