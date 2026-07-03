@props([
    'phone' => null,
    'showSocial' => false,
])

<div class="inn-site-admin-bar" role="banner">
    <div class="inn-site-admin-bar__inner">
        @if ($showSocial)
            <div class="inn-site-admin-bar__social" aria-label="Social links">
                <a href="https://www.facebook.com/Innovative-Associates-264830543559326" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                <a href="https://twitter.com/#/" target="_blank" rel="noopener" aria-label="Twitter"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
            </div>
        @else
            <span class="inn-site-admin-bar__spacer" aria-hidden="true"></span>
        @endif

        <div class="inn-site-admin-bar__right">
            @if ($phone)
                <span class="inn-site-admin-bar__phone">{{ $phone }}</span>
            @endif
            <a href="{{ route('login') }}" class="inn-site-admin-bar__login">Admin Login</a>
        </div>
    </div>
</div>
