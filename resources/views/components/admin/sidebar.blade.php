<aside class="hidden w-64 flex-shrink-0 border-r border-slate-200 bg-white lg:block">
    <div class="border-b border-slate-200 px-6 py-5">
        <p class="font-bold text-inn-navy">INN Admin</p>
        <p class="text-xs text-slate-500">Centralized dashboard</p>
    </div>
    <nav class="space-y-1 p-4 text-sm">
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'bg-slate-100 font-semibold' : '' }} block rounded-lg px-3 py-2 hover:bg-slate-50">Dashboard</a>
        <a href="{{ route('admin.contacts.index') }}" class="{{ request()->routeIs('admin.contacts.*') ? 'bg-slate-100 font-semibold' : '' }} block rounded-lg px-3 py-2 hover:bg-slate-50">Contacts</a>
        <a href="{{ route('admin.articles.index') }}" class="{{ request()->routeIs('admin.articles.*') ? 'bg-slate-100 font-semibold' : '' }} block rounded-lg px-3 py-2 hover:bg-slate-50">Articles</a>
        <a href="{{ route('admin.teams.index') }}" class="{{ request()->routeIs('admin.teams.*') ? 'bg-slate-100 font-semibold' : '' }} block rounded-lg px-3 py-2 hover:bg-slate-50">Team</a>
        <a href="{{ route('admin.faqs.index') }}" class="{{ request()->routeIs('admin.faqs.*') ? 'bg-slate-100 font-semibold' : '' }} block rounded-lg px-3 py-2 hover:bg-slate-50">FAQ</a>
        <a href="{{ route('admin.testimonials.index') }}" class="{{ request()->routeIs('admin.testimonials.*') ? 'bg-slate-100 font-semibold' : '' }} block rounded-lg px-3 py-2 hover:bg-slate-50">Testimonials</a>
        <a href="{{ route('admin.calculators.index') }}" class="{{ request()->routeIs('admin.calculators.*') ? 'bg-slate-100 font-semibold' : '' }} block rounded-lg px-3 py-2 hover:bg-slate-50">Calculators</a>
        <a href="{{ route('admin.contents.index') }}" class="{{ request()->routeIs('admin.contents.*') ? 'bg-slate-100 font-semibold' : '' }} block rounded-lg px-3 py-2 hover:bg-slate-50">Page Content</a>
        <hr class="my-3 border-slate-200">
        <p class="px-3 py-1 text-xs font-semibold uppercase tracking-wider text-slate-400">Domains</p>
        <a href="{{ domain_url('main', '/') }}" target="_blank" class="block rounded-lg px-3 py-2 hover:bg-slate-50">Main site ↗</a>
        <a href="{{ domain_url('tax', '/') }}" target="_blank" class="block rounded-lg px-3 py-2 hover:bg-slate-50">Tax site ↗</a>
        <a href="{{ domain_url('loan', '/') }}" target="_blank" class="block rounded-lg px-3 py-2 hover:bg-slate-50">Loan site ↗</a>
    </nav>
</aside>
