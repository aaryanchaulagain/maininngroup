@props(['active' => 'home'])

<div class="inn-main-header-sticky">
    <x-site.admin-bar
        :show-social="true"
        phone="Call us now: 02 8592 1165 | 0434 392 347" />

    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between gap-4 min-h-[4.25rem] sm:min-h-[4.75rem] py-1.5">
                <a href="{{ route('main.home') }}" class="flex shrink-0 items-center" aria-label="Innovative Group — Home">
                    <img src="{{ main_logo_url() }}"
                         alt="Innovative Group"
                         width="216"
                         height="52"
                         class="inn-main-nav-logo"
                         decoding="async">
                </a>
                <nav class="hidden md:flex items-center gap-8 shrink-0" aria-label="Main">
                    <a href="{{ route('main.home') }}" @class([
                        'text-sm font-semibold transition pb-0.5',
                        'text-[#094978] border-b-2 border-[#094978]' => $active === 'home',
                        'text-gray-700 hover:text-[#094978]' => $active !== 'home',
                    ])>Home</a>
                    <a href="{{ route('main.contact') }}" @class([
                        'text-sm font-semibold transition pb-0.5',
                        'text-[#094978] border-b-2 border-[#094978]' => $active === 'contact',
                        'text-gray-700 hover:text-[#094978]' => $active !== 'contact',
                    ])>Contact</a>
                </nav>
                <button id="mobile-menu-btn" type="button" class="md:hidden p-2 rounded text-gray-600 hover:text-gray-900" aria-label="Menu" aria-expanded="false" aria-controls="mobile-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-4 pb-4">
            <a href="{{ route('main.home') }}" class="block py-2 text-sm font-semibold text-gray-700 hover:text-[#094978]">Home</a>
            <a href="{{ route('main.contact') }}" class="block py-2 text-sm font-semibold text-gray-700 hover:text-[#094978]">Contact</a>
            <a href="{{ route('login') }}" class="block py-2 text-sm font-semibold text-[#094978]">Admin Login</a>
            <span class="block py-2 text-xs text-gray-500">Call: 02 8592 1165 | 0434 392 347</span>
        </div>
    </header>
</div>

@once
    @push('scripts')
        <script>
            document.getElementById('mobile-menu-btn')?.addEventListener('click', function () {
                const menu = document.getElementById('mobile-menu');
                const open = menu.classList.toggle('hidden') === false;
                this.setAttribute('aria-expanded', open ? 'true' : 'false');
            });
        </script>
    @endpush
@endonce
