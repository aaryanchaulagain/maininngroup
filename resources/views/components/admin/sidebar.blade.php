@php
    $sites = [
        'slate' => ['menu' => 'admin-sidebar__menu--slate', 'dot' => 'admin-sidebar__dot--slate', 'label' => 'admin-sidebar__label--slate', 'active' => 'is-active-slate'],
        'orange' => ['menu' => 'admin-sidebar__menu--orange', 'dot' => 'admin-sidebar__dot--orange', 'label' => 'admin-sidebar__label--orange', 'active' => 'is-active-orange'],
        'violet' => ['menu' => 'admin-sidebar__menu--violet', 'dot' => 'admin-sidebar__dot--violet', 'label' => 'admin-sidebar__label--violet', 'active' => 'is-active-violet'],
        'blue' => ['menu' => 'admin-sidebar__menu--blue', 'dot' => 'admin-sidebar__dot--blue', 'label' => 'admin-sidebar__label--blue', 'active' => 'is-active-blue'],
    ];

    $icons = [
        'envelope' => '✉',
        'newspaper' => '📰',
        'users' => '👥',
        'quote' => '💬',
        'calculator' => '🧮',
        'file' => '📄',
    ];
@endphp

<aside class="admin-sidebar">
    <div class="admin-sidebar__brand">
        <p class="admin-sidebar__brand-title">INN Admin</p>
        <p class="admin-sidebar__brand-sub">Manage each site separately</p>
    </div>

    <nav class="admin-sidebar__nav" aria-label="Admin navigation">
        <a href="{{ route('admin.dashboard') }}"
           class="admin-sidebar__dashboard {{ request()->routeIs('admin.dashboard') ? 'is-active' : '' }}">
            <span class="admin-sidebar__menu-icon" aria-hidden="true">⌂</span>
            <span>Dashboard</span>
        </a>

        @foreach (admin_sites() as $siteKey => $siteConfig)
            @php
                $tone = $sites[$siteConfig['color'] ?? 'slate'] ?? $sites['slate'];
                $publicUrl = is_callable($siteConfig['public_url'] ?? null) ? $siteConfig['public_url']() : domain_url($siteConfig['domain_key'], '/');
            @endphp

            <section class="admin-sidebar__section" aria-label="{{ $siteConfig['label'] }}">
                <div class="admin-sidebar__section-head">
                    <div class="admin-sidebar__section-title">
                        <span class="admin-sidebar__dot {{ $tone['dot'] }}" aria-hidden="true"></span>
                        <span class="admin-sidebar__section-label {{ $tone['label'] }}">{{ $siteConfig['label'] }}</span>
                    </div>
                    <a href="{{ $publicUrl }}" target="_blank" rel="noopener"
                       class="admin-sidebar__section-link" title="Open site">↗</a>
                </div>

                <ul class="admin-sidebar__menu {{ $tone['menu'] }}">
                    @foreach ($siteConfig['nav'] as $item)
                        @php
                            $routeName = admin_route_name($item['route'], $siteKey);
                            $isActive = request()->routeIs($routeName) || request()->routeIs($routeName.'.*');
                        @endphp
                        <li>
                            <a href="{{ route($routeName) }}"
                               class="admin-sidebar__menu-link {{ $isActive ? $tone['active'] : '' }}">
                                <span class="admin-sidebar__menu-icon" aria-hidden="true">{{ $icons[$item['icon'] ?? 'file'] ?? '•' }}</span>
                                <span>{{ $item['label'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </section>
        @endforeach
    </nav>
</aside>
