<header class="flex items-center justify-between border-b border-slate-200 bg-white px-6 py-4">
    <h1 class="text-lg font-semibold text-inn-navy">@yield('page-title', 'Dashboard')</h1>
    <div class="flex items-center gap-4">
        <span class="hidden text-sm text-slate-500 sm:inline">{{ auth()->user()->name }}</span>
        <button type="submit" form="logout-form" class="text-sm font-medium text-slate-600 hover:text-inn-navy">Logout</button>
    </div>
</header>
