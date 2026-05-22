<header x-data="{ open: false, about: false }" class="sticky top-0 z-50 border-b border-white/10 bg-loan-navy/90 backdrop-blur-xl">
    <nav class="container-wide flex items-center justify-between px-4 py-4 lg:px-8">
        <a href="{{ route('loan.home') }}" class="font-display text-2xl text-loan-gold">INN Loan</a>

        <div class="hidden items-center gap-1 lg:flex">
            <a href="{{ route('loan.home') }}" class="rounded-lg px-3 py-2 text-sm text-white/80 transition hover:text-loan-gold">Home</a>

            <div class="relative" @mouseenter="about = true" @mouseleave="about = false">
                <button class="flex items-center gap-1 rounded-lg px-3 py-2 text-sm text-white/80 hover:text-loan-gold">
                    About
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="about" x-transition class="absolute left-0 top-full mt-1 w-52 rounded-xl border border-white/10 bg-loan-navy py-2 shadow-2xl">
                    <a href="{{ route('loan.about.bank-vs') }}" class="block px-4 py-2 text-sm text-white/80 hover:text-loan-gold">Bank vs Innovative</a>
                    <a href="{{ route('loan.about.refer') }}" class="block px-4 py-2 text-sm text-white/80 hover:text-loan-gold">Refer & Earn</a>
                    <a href="{{ route('loan.about.team') }}" class="block px-4 py-2 text-sm text-white/80 hover:text-loan-gold">Team</a>
                </div>
            </div>

            <a href="{{ route('loan.articles') }}" class="rounded-lg px-3 py-2 text-sm text-white/80 hover:text-loan-gold">Articles</a>
            <a href="{{ route('loan.faq') }}" class="rounded-lg px-3 py-2 text-sm text-white/80 hover:text-loan-gold">FAQ</a>
            <a href="{{ route('loan.contact') }}" class="btn-primary bg-loan-gold text-loan-navy hover:bg-amber-400">Contact</a>
        

        <button @click="open = !open" class="rounded-lg p-2 text-white lg:hidden" aria-label="Menu">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
        </div>
    </nav>

    <div x-show="open" x-transition class="border-t border-white/10 px-4 py-4 lg:hidden">
        <div class="flex flex-col gap-2 text-sm text-white/80">
            <a href="{{ route('loan.home') }}">Home</a>
            <a href="{{ route('loan.about.bank-vs') }}">Bank vs Innovative</a>
            <a href="{{ route('loan.about.refer') }}">Refer & Earn</a>
            <a href="{{ route('loan.about.team') }}">Team</a>
            <a href="{{ route('loan.articles') }}">Articles</a>
            <a href="{{ route('loan.faq') }}">FAQ</a>
            <a href="{{ route('loan.contact') }}">Contact</a>
        </div>
    </div>
</header>
