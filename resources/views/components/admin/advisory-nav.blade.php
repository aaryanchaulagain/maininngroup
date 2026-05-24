<nav class="mb-6 flex flex-wrap gap-2 border-b border-slate-200 pb-4 text-sm">
    <a href="{{ route('admin.advisory.articles.index') }}"
        class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.advisory.articles.*') ? 'bg-blue-100 font-semibold text-blue-900' : 'text-slate-600 hover:bg-slate-50' }}">
        Articles
    </a>
    <a href="{{ route('admin.advisory.teams.index') }}"
        class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.advisory.teams.*') ? 'bg-blue-100 font-semibold text-blue-900' : 'text-slate-600 hover:bg-slate-50' }}">
        Team
    </a>
    <a href="{{ route('admin.advisory.testimonials.index') }}"
        class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.advisory.testimonials.*') ? 'bg-blue-100 font-semibold text-blue-900' : 'text-slate-600 hover:bg-slate-50' }}">
        Testimonials
    </a>
    <a href="{{ domain_url('advisory', '/') }}" target="_blank" rel="noopener"
        class="ml-auto rounded-lg px-3 py-2 text-slate-600 hover:bg-slate-50">
        View site ↗
    </a>
</nav>
