<header x-data="{ open: false }" class="fixed inset-x-0 top-0 z-50 border-b border-white/10 bg-inn-navy/80 backdrop-blur-xl">
    <nav class="container-wide flex items-center justify-between px-4 py-4 lg:px-8">
        <a href="{{ route('main.home') }}" class="text-lg font-bold tracking-tight text-white">INN Group</a>

        <div class="hidden items-center gap-8 md:flex">
            <a href="#services" class="text-sm text-white/80 transition hover:text-white">Services</a>
            <a href="#contact" class="text-sm text-white/80 transition hover:text-white">Contact</a>
            <a href="{{ domain_url('tax', '/') }}" class="text-sm text-white/80 transition hover:text-white">Tax</a>
            <a href="{{ domain_url('loan', '/') }}" class="text-sm text-white/80 transition hover:text-white">Loan</a>
            <a href="{{ route('login') }}" class="btn-primary bg-white/10 text-white hover:bg-white/20">Admin</a>
        </div>

        <button @click="open = !open" class="rounded-lg p-2 text-white md:hidden" aria-label="Menu">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </nav>

    <div x-show="open" x-transition class="border-t border-white/10 bg-inn-navy px-4 py-4 md:hidden">
        <div class="flex flex-col gap-3">
            <a href="#services" class="text-white/80">Services</a>
            <a href="#contact" class="text-white/80">Contact</a>
            <a href="{{ domain_url('tax', '/') }}" class="text-white/80">Tax</a>
            <a href="{{ domain_url('loan', '/') }}" class="text-white/80">Loan</a>
        </div>
    </div>
</header>
