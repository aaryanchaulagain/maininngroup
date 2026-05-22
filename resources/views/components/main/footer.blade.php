<footer class="border-t border-white/10 bg-inn-navy py-12 text-white/70">
    <div class="container-wide grid gap-10 px-4 sm:grid-cols-2 lg:grid-cols-4 lg:px-8">
        <div>
            <p class="text-lg font-bold text-white">INN Group</p>
            <p class="mt-3 text-sm leading-relaxed">Integrated tax and lending excellence for Australian businesses and families.</p>
        </div>
        <div>
            <p class="text-sm font-semibold uppercase tracking-wider text-white">Divisions</p>
            <ul class="mt-4 space-y-2 text-sm">
                <li><a href="{{ domain_url('tax', '/') }}" class="hover:text-white">INN Group Tax</a></li>
                <li><a href="{{ domain_url('loan', '/') }}" class="hover:text-white">INN Group Loan</a></li>
            </ul>
        </div>
        <div>
            <p class="text-sm font-semibold uppercase tracking-wider text-white">Contact</p>
            <p class="mt-4 text-sm">hello@inngroup.com.au</p>
        </div>
        <div>
            <p class="text-sm font-semibold uppercase tracking-wider text-white">Legal</p>
            <p class="mt-4 text-sm">&copy; {{ date('Y') }} INN Group Pty Ltd</p>
        </div>
    </div>
</footer>
