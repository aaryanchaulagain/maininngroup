@extends('layouts.tax-zimed')

@section('body-class', 'page-calculator wp-singular page page-id-1856 elementor-page elementor-page-1856')

@section('title', 'Calculator – Innovative associates')

@push('head')
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/uploads/elementor/css/post-1856.css?ver=1779432622">
    <link rel="stylesheet" href="https://innovativeassociates.com.au/wp-content/plugins/elementor/assets/css/widget-tabs.min.css?ver=4.0.9">
@endpush

@section('content')
@include('components.tax.zimed.header', ['active' => 'calculator'])

<div class="full-width-page elementor elementor-1856">
    <x-tax.zimed.page-header
        title="Calculator"
        :crumbs="[
            ['label' => 'Home', 'url' => route('tax.home')],
            ['label' => 'Calculator', 'current' => true],
        ]"
    />

    <section class="tax-calculator elementor-section elementor-top-section">
        <div class="container">
            <x-tax.zimed.calculator-tabs />
        </div>
    </section>
</div>

@include('components.tax.zimed.footer')
@endsection

@push('scripts')
<script>
(function ($) {
    'use strict';

    function activateTab($tabs, tabId) {
        $tabs.find('.elementor-tab-title').removeClass('elementor-active')
            .attr('aria-selected', 'false').attr('tabindex', '-1');
        $tabs.find('.elementor-tab-title[data-tab="' + tabId + '"]').addClass('elementor-active')
            .attr('aria-selected', 'true').attr('tabindex', '0');
        $tabs.find('.elementor-tab-content').attr('hidden', 'hidden').removeClass('elementor-active');
        $tabs.find('.elementor-tab-content[data-tab="' + tabId + '"]')
            .removeAttr('hidden').addClass('elementor-active');
    }

    $('.tax-calculator-tabs .elementor-tab-title').on('click', function () {
        var tabId = $(this).data('tab');
        activateTab($(this).closest('.elementor-tabs'), tabId);
    });

    var jotform = document.getElementById('JotFormIFrame-230954821634862');
    if (jotform) {
        var src = jotform.src;
        var iframeParams = [];
        if (window.location.href && window.location.href.indexOf('?') > -1) {
            iframeParams = iframeParams.concat(
                window.location.href.substr(window.location.href.indexOf('?') + 1).split('&')
            );
        }
        if (src && src.indexOf('?') > -1) {
            iframeParams = iframeParams.concat(src.substr(src.indexOf('?') + 1).split('&'));
            src = src.substr(0, src.indexOf('?'));
        }
        iframeParams.push('isIframeEmbed=1');
        jotform.src = src + '?' + iframeParams.join('&');
    }

    window.handleIFrameMessage = function (e) {
        if (typeof e.data === 'object') {
            return;
        }
        var args = e.data.split(':');
        var iframe;
        if (args.length > 2) {
            iframe = document.getElementById('JotFormIFrame-' + args[args.length - 1]);
        } else {
            iframe = document.getElementById('JotFormIFrame-230954821634862');
        }
        if (!iframe) {
            return;
        }
        switch (args[0]) {
            case 'scrollIntoView':
                iframe.scrollIntoView();
                break;
            case 'setHeight':
                iframe.style.height = args[1] + 'px';
                if (!isNaN(args[1]) && parseInt(iframe.style.minHeight, 10) > parseInt(args[1], 10)) {
                    iframe.style.minHeight = args[1] + 'px';
                }
                break;
            case 'collapseErrorPage':
                if (iframe.clientHeight > window.innerHeight) {
                    iframe.style.height = window.innerHeight + 'px';
                }
                break;
            case 'reloadPage':
                window.location.reload();
                break;
            case 'loadScript':
                if (!window.isPermitted(e.origin, ['jotform.com', 'jotform.pro'])) {
                    break;
                }
                var scriptSrc = args[1];
                if (args.length > 3) {
                    scriptSrc = args[1] + ':' + args[2];
                }
                var script = document.createElement('script');
                script.src = scriptSrc;
                script.type = 'text/javascript';
                document.body.appendChild(script);
                break;
        }
        var isJotForm = e.origin.indexOf('jotform') > -1;
        if (isJotForm && 'contentWindow' in iframe && 'postMessage' in iframe.contentWindow) {
            var urls = {
                docurl: encodeURIComponent(document.URL),
                referrer: encodeURIComponent(document.referrer),
            };
            iframe.contentWindow.postMessage(JSON.stringify({ type: 'urls', value: urls }), '*');
        }
    };

    window.isPermitted = function (originUrl, whitelistedDomains) {
        var url = document.createElement('a');
        url.href = originUrl;
        var hostname = url.hostname;
        var result = false;
        if (typeof hostname !== 'undefined') {
            whitelistedDomains.forEach(function (element) {
                if (
                    hostname.slice(-1 * element.length - 1) === '.' + element ||
                    hostname === element
                ) {
                    result = true;
                }
            });
        }
        return result;
    };

    if (window.addEventListener) {
        window.addEventListener('message', handleIFrameMessage, false);
    } else if (window.attachEvent) {
        window.attachEvent('onmessage', handleIFrameMessage);
    }
})(jQuery);
</script>
@endpush
