<header x-data="{ open: false, about: false, services: false }" class="sticky top-0 z-50 border-b border-tax-mint/50 bg-white/90 backdrop-blur-xl">
    <nav class="container-wide flex items-center justify-between px-4 py-4 lg:px-8">
        <a href="{{ route('tax.home') }}" class="text-lg font-bold text-tax-deep">INN <span class="text-tax-teal">Tax</span></a>

        <div class="hidden items-center gap-1 lg:flex">
            <a href="{{ route('tax.home') }}" class="nav-link rounded-lg px-3 py-2 text-gray-700 hover:bg-tax-mint/50">Home</a>

            <div class="relative" @mouseenter="about = true" @mouseleave="about = false">
                <a href="{{ route('tax.aboutus') }}" class="nav-link flex items-center gap-1 rounded-lg px-3 py-2 text-gray-700 hover:bg-tax-mint/50">
                    About
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <div x-show="about" x-transition class="absolute left-0 top-full z-50 w-48 pt-1">
                    <div class="rounded-xl border border-gray-100 bg-white py-2 shadow-xl">
                        <a href="{{ route('tax.aboutus') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-tax-mint/30">About Us</a>
                        <a href="{{ route('tax.about.team') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-tax-mint/30">Meet Team</a>
                        <a href="{{ route('tax.about.disclaimer') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-tax-mint/30">Disclaimer</a>
                    </div>
                </div>
            </div>

            <div class="relative" @mouseenter="services = true" @mouseleave="services = false">
                <button type="button" class="nav-link flex items-center gap-1 rounded-lg px-3 py-2 text-gray-700 hover:bg-tax-mint/50">
                    Services
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="services" x-transition class="absolute left-0 top-full z-50 w-56 pt-1">
                    <div class="rounded-xl border border-gray-100 bg-white py-2 shadow-xl">
                        <a href="{{ route('tax.services.accounting') }}" class="block px-4 py-2 text-sm hover:bg-tax-mint/30">Accounting & Taxation</a>
                        <a href="{{ route('tax.services.mortgage') }}" class="block px-4 py-2 text-sm hover:bg-tax-mint/30">Mortgage & Loan</a>
                        <a href="{{ route('tax.services.advisory') }}" class="block px-4 py-2 text-sm hover:bg-tax-mint/30">Business Advisory</a>
                        <a href="{{ route('tax.services.bas-gst') }}" class="block px-4 py-2 text-sm hover:bg-tax-mint/30">BAS / GST</a>
                        <a href="{{ route('tax.services.smsf') }}" class="block px-4 py-2 text-sm hover:bg-tax-mint/30">SMSF</a>
                        <a href="{{ route('tax.services.compliance') }}" class="block px-4 py-2 text-sm hover:bg-tax-mint/30">Compliance</a>
                    </div>
                </div>
            </div>

            <a href="{{ route('tax.mentoring') }}" class="nav-link rounded-lg px-3 py-2 text-gray-700 hover:bg-tax-mint/50">Mentoring</a>
            <a href="{{ route('tax.perspective') }}" class="nav-link rounded-lg px-3 py-2 text-gray-700 hover:bg-tax-mint/50">Perspective</a>
            <a href="{{ route('tax.calculator') }}" class="nav-link rounded-lg px-3 py-2 text-gray-700 hover:bg-tax-mint/50">Calculator</a>
            <a href="{{ route('tax.tax') }}" class="nav-link rounded-lg px-3 py-2 text-gray-700 hover:bg-tax-mint/50">Tax Lodgement</a>
            <a href="{{ route('tax.contact') }}" class="btn-primary bg-tax-teal text-white hover:bg-tax-deep">Contact</a>
        

        <button @click="open = !open" class="rounded-lg p-2 lg:hidden" aria-label="Menu">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
        </div>
    </nav>

    <div x-show="open" x-transition class="border-t px-4 py-4 lg:hidden">
        <div class="flex flex-col gap-2 text-sm">
            <a href="{{ route('tax.home') }}">Home</a>
            <a href="{{ route('tax.aboutus') }}">About Us</a>
            <a href="{{ route('tax.about.team') }}">Meet Team</a>
            <a href="{{ route('tax.about.disclaimer') }}">Disclaimer</a>
            <a href="{{ route('tax.services.accounting') }}">Accounting & Taxation</a>
            <a href="{{ route('tax.services.mortgage') }}">Mortgage & Loan</a>
            <a href="{{ route('tax.services.advisory') }}">Business Advisory</a>
            <a href="{{ route('tax.services.bas-gst') }}">BAS / GST</a>
            <a href="{{ route('tax.services.smsf') }}">SMSF</a>
            <a href="{{ route('tax.services.compliance') }}">Compliance</a>
            <a href="{{ route('tax.mentoring') }}">Mentoring</a>
            <a href="{{ route('tax.perspective') }}">Perspective</a>
            <a href="{{ route('tax.calculator') }}">Calculator</a>
            <a href="{{ route('tax.tax') }}">Tax Lodgement</a>
            <a href="{{ route('tax.contact') }}">Contact</a>
        </div>
    </div>
</header>
