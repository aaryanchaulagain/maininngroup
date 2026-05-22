@props([
    'current' => '',
])

<nav class="loan-page-breadcrumbs" aria-label="Breadcrumb">
    <div class="fusion-page-title-bar fusion-page-title-bar-none fusion-page-title-bar-center">
        <div class="fusion-page-title-row">
            <div class="fusion-page-title-wrapper">
                <div class="fusion-breadcrumbs">
                    <span class="fusion-breadcrumb-item">
                        <a href="{{ route('loan.home') }}" class="fusion-breadcrumb-link"><span>Home</span></a>
                    </span>
                    <span class="fusion-breadcrumb-sep">/</span>
                    <span class="fusion-breadcrumb-item">
                        <span class="breadcrumb-leaf">{{ $current }}</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</nav>
