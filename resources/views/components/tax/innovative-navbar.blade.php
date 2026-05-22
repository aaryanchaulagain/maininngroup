@php
    $logo = 'https://innovativeassociates.com.au/wp-content/uploads/2021/03/cropped-Untitled-1-2.png';
@endphp

<header
    x-data="{ open: false, about: false, services: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 80 })"
    :class="scrolled ? 'inn-nav inn-nav--sticky' : 'inn-nav inn-nav--transparent'"
    class="fixed inset-x-0 top-0 z-[999] transition-all duration-300 ease-linear"
>
    <div class="mx-auto flex h-[100px] max-w-[1200px] items-center justify-between px-[15px]">
        <a href="{{ route('tax.home') }}" class="relative z-[2] shrink-0">
            <img src="{{ $logo }}" alt="Innovative Associates" class="h-[72px] w-auto max-w-[220px] object-contain">
        </a>

        <nav class="hidden items-center lg:flex">
            <ul class="flex items-center gap-[32px]">
                <li>
                    <a href="{{ route('tax.home') }}" class="inn-nav__link" :class="scrolled ? 'inn-nav__link--dark' : ''">Home</a>
                </li>
                <li class="relative" @mouseenter="about = true" @mouseleave="about = false">
                    <button type="button" class="inn-nav__link flex items-center gap-1" :class="scrolled ? 'inn-nav__link--dark' : ''">
                        About
                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"/></svg>
                    </button>
                    <div x-show="about" x-transition class="inn-nav__dropdown absolute left-0 top-full pt-[12px]">
                        <ul class="min-w-[220px] bg-white py-[10px] shadow-[0_10px_30px_rgba(16,45,94,0.12)]">
                            <li><a href="{{ route('tax.about.team') }}" class="inn-nav__dropdown-link">Meet The Team</a></li>
                            <li><a href="{{ route('tax.about.disclaimer') }}" class="inn-nav__dropdown-link">Disclaimer</a></li>
                        </ul>
                    </div>
                </li>
                <li class="relative" @mouseenter="services = true" @mouseleave="services = false">
                    <button type="button" class="inn-nav__link flex items-center gap-1" :class="scrolled ? 'inn-nav__link--dark' : ''">
                        Services
                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"/></svg>
                    </button>
                    <div x-show="services" x-transition class="inn-nav__dropdown absolute left-0 top-full pt-[12px]">
                        <ul class="min-w-[280px] bg-white py-[10px] shadow-[0_10px_30px_rgba(16,45,94,0.12)]">
                            <li><a href="{{ route('tax.services.accounting') }}" class="inn-nav__dropdown-link">Accounting and Taxation Services</a></li>
                            <li><a href="{{ route('tax.services.mortgage') }}" class="inn-nav__dropdown-link">Mortgage and Finance Service</a></li>
                            <li><a href="{{ route('tax.services.advisory') }}" class="inn-nav__dropdown-link">Business advisory Service</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ route('tax.mentoring') }}" class="inn-nav__link" :class="scrolled ? 'inn-nav__link--dark' : ''">Mentoring</a></li>
                <li><a href="{{ route('tax.perspective') }}" class="inn-nav__link" :class="scrolled ? 'inn-nav__link--dark' : ''">Perspective</a></li>
                <li><a href="{{ route('tax.calculator') }}" class="inn-nav__link" :class="scrolled ? 'inn-nav__link--dark' : ''">Calculator</a></li>
                <li><a href="{{ route('tax.tax') }}" class="inn-nav__link" :class="scrolled ? 'inn-nav__link--dark' : ''">Tax Lodgement</a></li>
                <li><a href="{{ route('tax.contact') }}" class="inn-nav__link" :class="scrolled ? 'inn-nav__link--dark' : ''">Contact</a></li>
            </ul>
        </nav>

        <button
            type="button"
            class="relative z-[2] p-2 lg:hidden"
            @click="open = !open"
            aria-label="Menu"
        >
            <span class="block h-[2px] w-[26px] transition" :class="scrolled && !open ? 'bg-[#102d5e]' : 'bg-white'"></span>
            <span class="mt-[6px] block h-[2px] w-[26px] transition" :class="scrolled && !open ? 'bg-[#102d5e]' : 'bg-white'"></span>
            <span class="mt-[6px] block h-[2px] w-[26px] transition" :class="scrolled && !open ? 'bg-[#102d5e]' : 'bg-white'"></span>
        </button>
    </div>

    <div x-show="open" x-transition class="border-t border-white/10 bg-[#102d5e] px-[15px] py-4 lg:hidden">
        <ul class="space-y-3 text-[15px] font-medium text-white">
            <li><a href="{{ route('tax.home') }}">Home</a></li>
            <li><a href="{{ route('tax.aboutus') }}">About Us</a></li>
            <li><a href="{{ route('tax.about.team') }}">Meet The Team</a></li>
            <li><a href="{{ route('tax.about.disclaimer') }}">Disclaimer</a></li>
            <li><a href="{{ route('tax.services.accounting') }}">Accounting and Taxation Services</a></li>
            <li><a href="{{ route('tax.services.mortgage') }}">Mortgage and Finance Service</a></li>
            <li><a href="{{ route('tax.services.advisory') }}">Business advisory Service</a></li>
            <li><a href="{{ route('tax.mentoring') }}">Mentoring</a></li>
            <li><a href="{{ route('tax.perspective') }}">Perspective</a></li>
            <li><a href="{{ route('tax.calculator') }}">Calculator</a></li>
            <li><a href="{{ route('tax.tax') }}">Tax Lodgement</a></li>
            <li><a href="{{ route('tax.contact') }}">Contact</a></li>
        </ul>
    </div>
</header>
