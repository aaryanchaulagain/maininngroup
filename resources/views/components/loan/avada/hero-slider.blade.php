@php
    $cdn = 'https://innovativewealth.com.au/wp-content/uploads';
    $contactUrl = route('loan.contact');
@endphp

<div id="sliders-container" class="loan-hero-slider">
    <style type="text/css">#layerslider-container { max-width: 1280px; }</style>
    <div id="layerslider-container">
        <div id="layerslider-wrapper">
            <div id="layerslider_loan_home" class="ls-wp-container fitvidsignore" style="width:1280px;height:600px;margin:0 auto;margin-bottom:0;">
                <div class="ls-slide" data-ls="duration:4000;transition2d:5;kenburnsscale:1.2;">
                    <img width="1800" height="600" src="{{ $cdn }}/layerslider/Summer-Collection/brown3.jpg" class="ls-bg" alt="" decoding="async" fetchpriority="high">
                    <div style="top:200px;left:200px;text-align:center;font-weight:900;font-size:60px;font-family:Lato;line-height:60px;" class="ls-l" data-ls="offsetyin:-50lh;delayin:100;easingin:easeOutQuint;">INNOVATIVE</div>
                    <div style="top:270px;left:137px;text-align:center;font-weight:900;font-family:Lato;font-size:60px;line-height:60px;" class="ls-l" data-ls="offsetyin:-50lh;delayin:150;easingin:easeOutQuint;">WEALTH</div>
                    <div style="top:140px;left:238px;font-weight:700;font-size:14px;line-height:22px;color:#1E63D8;font-family:Lato;" class="ls-l" data-ls="offsetyin:-100lh;easingin:easeOutQuint;">FROM PRE APPROVAL TO PROPERTY</div>
                    <div style="top:338px;left:153px;text-align:center;font-weight:400;font-size:14px;font-family:Lato;line-height:22px;color:rgb(137,137,137);width:350px;white-space:normal;" class="ls-l" data-ls="offsetyin:-50px;delayin:200;easingin:easeOutQuint;">SOLUTIONS TO YOUR.<br>WEALTH CREATIONS!</div>
                    <a href="{{ $contactUrl }}" style="cursor:pointer;top:427px;left:160px;font-weight:700;color:#ffffff;font-family:Lato;font-size:14px;padding:14px 35px;background-color:#1E63D8;text-decoration:none;border-radius:4px;" class="ls-l" data-ls="offsetyin:50px;delayin:200;easingin:easeOutQuint;hover:true;hoveropacity:0.7;">READ MORE</a>
                </div>
                <div class="ls-slide" data-ls="duration:4000;transition2d:5;kenburnsscale:1.2;">
                    <img width="1900" height="600" src="{{ $cdn }}/layerslider/Summer-Collection/brownv2.jpg" class="ls-bg" alt="" decoding="async">
                    <div style="top:200px;left:797px;text-align:center;font-weight:900;font-size:60px;font-family:Lato;line-height:60px;" class="ls-l" data-ls="offsetyin:-50lh;delayin:100;easingin:easeOutQuint;">ACCOUNTING &amp;</div>
                    <div style="top:268px;left:774px;text-align:center;font-weight:900;font-family:Lato;font-size:70px;line-height:70px;" class="ls-l" data-ls="offsetyin:-50lh;delayin:150;easingin:easeOutQuint;">TAXATION</div>
                    <div style="top:340px;left:789px;text-align:center;font-weight:400;font-size:14px;font-family:Lato;line-height:22px;color:rgb(137,137,137);width:350px;" class="ls-l" data-ls="offsetyin:-50px;delayin:200;easingin:easeOutQuint;">ALL AT ONE PLACE. NO HASSLES AT ALL!</div>
                    <a href="{{ domain_url('tax') }}" style="cursor:pointer;top:427px;left:795px;font-weight:700;color:#ffffff;font-family:Lato;font-size:14px;padding:14px 35px;background-color:#1E63D8;text-decoration:none;border-radius:4px;" class="ls-l" data-ls="offsetyin:50px;delayin:200;easingin:easeOutQuint;hover:true;hoveropacity:0.7;">READ MORE</a>
                </div>
                <div class="ls-slide" data-ls="duration:4000;transition2d:5;kenburnsscale:1.2;">
                    <img width="1800" height="600" src="{{ $cdn }}/layerslider/Summer-Collection/brown2.jpg" class="ls-bg" alt="" decoding="async">
                    <div style="top:200px;left:198px;text-align:center;font-weight:900;font-size:60px;font-family:Lato;line-height:60px;" class="ls-l" data-ls="offsetyin:-50lh;delayin:100;easingin:easeOutQuint;">ALL TYPES OF</div>
                    <div style="top:260px;left:102px;text-align:center;font-weight:900;font-family:Lato;font-size:60px;line-height:60px;" class="ls-l" data-ls="offsetyin:-50lh;delayin:150;easingin:easeOutQuint;">INSURANCE</div>
                    <div style="top:338px;left:145px;text-align:center;font-weight:400;font-size:14px;font-family:Lato;line-height:22px;color:rgb(137,137,137);width:350px;" class="ls-l" data-ls="offsetyin:-50px;delayin:200;easingin:easeOutQuint;">LET US GET YOU THE<br>BEST DEAL!</div>
                    <a href="{{ $contactUrl }}" style="cursor:pointer;top:427px;left:158px;font-weight:700;color:#ffffff;font-family:Lato;font-size:14px;padding:14px 35px;background-color:#1E63D8;text-decoration:none;border-radius:4px;" class="ls-l" data-ls="offsetyin:50px;delayin:200;easingin:easeOutQuint;hover:true;hoveropacity:0.7;">READ MORE</a>
                    <a href="{{ $contactUrl }}" style="cursor:pointer;top:427px;left:332px;font-weight:700;font-family:Lato;font-size:14px;padding:12px 33px;border:solid 2px #1E63D8;color:#1E63D8;background-color:#ffffff;text-decoration:none;border-radius:4px;" class="ls-l" data-ls="offsetyin:50px;delayin:200;easingin:easeOutQuint;">GET A QUOTE</a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
jQuery(function($) {
    if (typeof _initLayerSlider === 'function') {
        _initLayerSlider('#layerslider_loan_home', {
            createdWith: '6.5.202',
            sliderVersion: '6.11.2',
            type: 'fullwidth',
            skin: 'numbers',
            hoverPrevNext: false,
            navStartStop: false,
            navButtons: false,
            hoverBottomNav: true,
            skinsPath: 'https://innovativewealth.com.au/wp-content/plugins/LayerSlider/assets/static/layerslider/skins/'
        });
    }
});
</script>
@endpush
