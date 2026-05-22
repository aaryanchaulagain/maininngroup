<footer class="border-t border-white/10 bg-black/20 section-pad">
    <div class="container-wide grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
        <div>
            <p class="font-display text-xl text-loan-gold">INN Group Loan</p>
            <p class="mt-3 text-sm text-white/60">Boutique mortgage broking with institutional lender access.</p>
        </div>
        <div>
            <p class="text-sm font-semibold text-loan-gold">Explore</p>
            <ul class="mt-3 space-y-2 text-sm text-white/60">
                <li><a href="{{ route('loan.articles') }}" class="hover:text-white">Articles</a></li>
                <li><a href="{{ route('loan.faq') }}" class="hover:text-white">FAQ</a></li>
            </ul>
        </div>
        <div>
            <p class="text-sm font-semibold text-loan-gold">About</p>
            <ul class="mt-3 space-y-2 text-sm text-white/60">
                <li><a href="{{ route('loan.about.bank-vs') }}" class="hover:text-white">Bank vs Innovative</a></li>
                <li><a href="{{ route('loan.about.refer') }}" class="hover:text-white">Refer & Earn</a></li>
            </ul>
        </div>
        <div>
            <p class="text-sm font-semibold text-loan-gold">Contact</p>
            <p class="mt-3 text-sm text-white/60">loan@inngroup.com.au</p>
        </div>
    </div>
    <p class="container-wide mt-10 border-t border-white/10 pt-6 text-center text-xs text-white/40">&copy; {{ date('Y') }} INN Group Loan</p>
</footer>
