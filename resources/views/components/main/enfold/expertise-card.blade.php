@props([
    'title',
    'text',
    'style' => 'dark',
    'href' => '#',
    'learnUrl' => null,
    'icon' => null,
    'iconFont' => 'justice',
    'iconClass' => null,
])

@php
    $link = $learnUrl ?? $href;
    $styles = [
        'dark' => 'background: #072f4c; padding:40px; background-color:#072f4c;',
        'gradient' => 'background:linear-gradient(45deg,#094978,#105e96); padding:40px; background-color:#094978;',
    ];
    $boxStyle = ($styles[$style] ?? $styles['dark']) . ' border-radius:3px;';
@endphp

<div class="flex_column av_one_third av-animated-generic left-to-right flex_column_table_cell av-equal-height-column av-align-middle column-top-margin" style="{{ $boxStyle }}">
    <span class="av_font_icon avia_animate_when_visible avia-icon-animate av-icon-style- avia-icon-pos-center inn-expertise-icon" style="color:#ffffff; border-color:#ffffff;">
        @if ($iconClass)
            <i class="{{ $iconClass }} inn-expertise-fa" aria-hidden="true"></i>
        @else
            <span class="av-icon-char" style="font-size:70px;line-height:70px;" aria-hidden="true" data-av_icon="{{ $icon }}" data-av_iconfont="{{ $iconFont }}"></span>
        @endif
    </span>
    <div style="padding-bottom:10px; margin-top:25px; color:#ffffff;" class="av-special-heading av-special-heading-h2 custom-color-heading blockquote modern-quote modern-centered">
        <h2 class="av-special-heading-tag" itemprop="headline">{!! $title !!}</h2>
        <div class="special-heading-border"><div class="special-heading-inner-border" style="border-color:#ffffff"></div></div>
    </div>
    <section class="av_textblock_section" itemscope itemtype="https://schema.org/CreativeWork">
        <div class="avia_textblock av_inherit_color" style="color:#ffffff;" itemprop="text">
            <p style="text-align: center;">{{ $text }}</p>
        </div>
    </section>
    <div style="height:20px" class="hr hr-invisible"><span class="hr-inner"><span class="hr-inner-style"></span></span></div>
    <div class="avia-button-wrap avia-button-center avia-builder-el-last">
        <a href="{{ $link }}" class="avia-button av-icon-on-hover avia-icon_select-yes-right-icon avia-size-large avia-position-center" style="background-color:#ffffff; border-color:#ffffff; color:#000000;">
            <span class="avia_iconbox_title">Learn more</span>
            <span class="avia_button_icon avia_button_icon_right" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
        </a>
    </div>
</div>
