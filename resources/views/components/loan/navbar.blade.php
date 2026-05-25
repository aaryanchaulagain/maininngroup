<header x-data="{ open: false, about: false, services: false }" class="sticky top-0 z-50 border-b border-loan-border bg-white/90 backdrop-blur-xl">
    <nav class="container-wide flex items-center justify-between px-4 py-4 lg:px-8">
        <a href="{{ route('loan.home') }}" class="text-lg font-bold text-loan-navy">
            <span class="block">Innovative Finance</span>
            <span class="block text-xs font-semibold uppercase tracking-wider text-loan-blue">INN Group</span>
        </a>

        <div class="hidden items-center gap-1 lg:flex">
            <a href="{{ route('loan.home') }}" class="rounded-lg px-3 py-2 text-sm text-gray-700 hover:bg-loan-surface">Home</a>

            <div class="relative" @mouseenter="about = true" @mouseleave="about = false">
                <button class="flex items-center gap-1 rounded-lg px-3 py-2 text-sm text-gray-700 hover:bg-loan-surface">
                    About
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="about" x-transition class="absolute left-0 top-full mt-1 w-52 rounded-xl border border-loan-border bg-white py-2 shadow-lg">
                    <a href="{{ route('loan.about.bank-vs') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-loan-surface">Bank vs Innovative</a>
                    <a href="{{ route('loan.about.refer') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-loan-surface">Refer & Earn</a>
                    <a href="{{ route('loan.about.team') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-loan-surface">Team</a>
                </div>
            </div>

            <div class="relative" @mouseenter="services = true" @mouseleave="services = false">
                <button type="button" class="flex items-center gap-1 rounded-lg px-3 py-2 text-sm text-gray-700 hover:bg-loan-surface">
                    Services
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="services" x-transition class="absolute left-0 top-full mt-1 w-52 rounded-xl border border-loan-border bg-white py-2 shadow-lg">
                    <a href="{{ route('loan.services.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-loan-surface">All services</a>
                    <a href="{{ route('loan.services.show', 'home-loan') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-loan-surface">Home Loan</a>
                    <a href="{{ route('loan.services.show', 'investment-loan') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-loan-surface">Investment Loan</a>
                    <a href="{{ route('loan.services.show', 'refinancing') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-loan-surface">Refinancing</a>
                    <a href="{{ route('loan.services.show', 'asset-finance') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-loan-surface">Asset Finance</a>
                    <a href="{{ route('loan.services.show', 'commercial-finance') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-loan-surface">Commercial Finance</a>
                    <a href="{{ route('loan.services.show', 'mortgage-and-loan') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-loan-surface">Mortgage and Loan</a>
                </div>
            </div>
            <a href="{{ route('loan.articles') }}" class="rounded-lg px-3 py-2 text-sm text-gray-700 hover:bg-loan-surface">Articles</a>
            <a href="{{ route('loan.faq') }}" class="rounded-lg px-3 py-2 text-sm text-gray-700 hover:bg-loan-surface">FAQ</a>
            <a href="{{ route('loan.calculator') }}" class="rounded-lg px-3 py-2 text-sm text-gray-700 hover:bg-loan-surface">Calculator</a>
            <a href="{{ route('loan.contact') }}" class="rounded-lg bg-loan-blue px-4 py-2 text-sm font-semibold text-white hover:opacity-90">Contact</a>
        </div>

        <button @click="open = !open" class="rounded-lg p-2 text-loan-navy lg:hidden" aria-label="Menu">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </nav>

    <div x-show="open" x-transition class="border-t border-loan-border px-4 py-4 lg:hidden">
        <div class="flex flex-col gap-2 text-sm text-gray-700">
            <a href="{{ route('loan.home') }}">Home</a>
            <a href="{{ route('loan.services.index') }}">All services</a>
            <a href="{{ route('loan.about.bank-vs') }}">Bank vs Innovative</a>
            <a href="{{ route('loan.contact') }}">Contact</a>
        </div>
    </div>
</header>
