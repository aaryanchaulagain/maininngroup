<?php

namespace App\Http\Controllers\Advisory;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class AdvisoryController extends Controller
{
    public function home(): View
    {
        return view('advisory.home', [
            'services' => $this->serviceCards(),
            'articles' => $this->advisoryArticles(3),
            'testimonials' => $this->advisoryTestimonials(),
            'featuredTestimonial' => $this->advisoryFeaturedTestimonial(),
        ]);
    }

    public function about(): View
    {
        return view('advisory.about', [
            'testimonials' => $this->advisoryTestimonials(),
            'featuredTestimonial' => $this->advisoryFeaturedTestimonial(),
        ]);
    }

    public function team(): View
    {
        return view('advisory.team.index', [
            'team' => $this->advisoryTeam(),
        ]);
    }

    public function teamMember(string $slug): View
    {
        $member = Team::active()->forDomain('advisory')->where('slug', $slug)->firstOrFail();

        return view('advisory.team.show', compact('member'));
    }

    public function articles(): View
    {
        return view('advisory.articles.index', [
            'articles' => $this->advisoryArticlesPaginated(9),
        ]);
    }

    public function showArticle(Article $article): View
    {
        abort_unless($article->published && $article->source_domain === 'advisory', 404);

        return view('advisory.articles.show', [
            'article' => $article,
            'recent' => Article::published()
                ->forDomain('advisory')
                ->where('id', '!=', $article->id)
                ->latest('published_at')
                ->take(3)
                ->get(),
        ]);
    }

    public function servicesIndex()
    {
        return redirect()->route('advisory.services.show', 'business-advisory');
    }

    public function service(string $slug): View
    {
        $services = $this->servicesDetail();
        abort_unless(isset($services[$slug]), 404);

        if ($slug === 'business-advisory') {
            return view('advisory.services.business-advisory', [
                'allServices' => $this->serviceNav(),
            ]);
        }

        if ($slug === 'insurance') {
            return view('advisory.services.insurance', [
                'allServices' => $this->serviceNav(),
            ]);
        }

        if ($slug === 'risk-management') {
            return view('advisory.services.risk-management', [
                'allServices' => $this->serviceNav(),
            ]);
        }

        if ($slug === 'business-consulting') {
            return view('advisory.services.business-consulting', [
                'allServices' => $this->serviceNav(),
            ]);
        }

        if ($slug === 'strategic-planning') {
            return view('advisory.services.strategic-planning', [
                'allServices' => $this->serviceNav(),
            ]);
        }

        return view('advisory.services.show', [
            'service' => $services[$slug],
            'slug' => $slug,
            'allServices' => $this->serviceNav(),
        ]);
    }

    public function contact(): View
    {
        return view('advisory.contact');
    }

    /** @return array<int, array{slug: string, title: string, excerpt: string, icon: string}> */
    protected function serviceCards(): array
    {
        return array_values(array_map(fn ($s) => [
            'slug' => $s['slug'],
            'title' => $s['title'],
            'excerpt' => $s['excerpt'],
            'icon' => $s['icon'],
        ], $this->servicesDetail()));
    }

    /** @return array<string, array{slug: string, title: string, tagline: string, excerpt: string, icon: string, body: array<int, string>, highlights: array<int, string>}> */
    protected function servicesDetail(): array
    {
        return [
            'business-advisory' => [
                'slug' => 'business-advisory',
                'title' => 'Business Advisory',
                'tagline' => 'Strategic guidance for sustainable growth',
                'excerpt' => 'Partner with experienced advisors to improve performance, manage risk, and unlock long-term value across your organisation.',
                'icon' => 'fa-briefcase',
                'body' => [
                    'Our business advisory practice helps owners and leadership teams make confident decisions in complex markets. We combine financial insight, operational discipline, and practical strategy to support growth at every stage.',
                    'From cash-flow optimisation to organisational design, we work alongside you to build resilient businesses that adapt and scale.',
                ],
                'highlights' => ['Growth strategy', 'Operational review', 'Board-ready reporting', 'Succession planning'],
            ],
            'insurance' => [
                'slug' => 'insurance',
                'title' => 'Insurance',
                'tagline' => 'Protection aligned to your risk profile',
                'excerpt' => 'Structured insurance advice for individuals and businesses — aligning cover with your objectives, obligations, and appetite for risk.',
                'icon' => 'fa-shield-halved',
                'body' => [
                    'We help you understand exposure across personal and commercial lines, then coordinate solutions through trusted specialist partners.',
                    'Our role is to clarify options, compare structures, and ensure your protection strategy evolves with your business.',
                ],
                'highlights' => ['Risk assessment', 'Policy review', 'Claims support', 'Specialist referrals'],
            ],
            'risk-management' => [
                'slug' => 'risk-management',
                'title' => 'Risk Management',
                'tagline' => 'Identify, measure, and mitigate what matters',
                'excerpt' => 'Enterprise and operational risk frameworks that strengthen governance and support informed decision-making.',
                'icon' => 'fa-chart-line',
                'body' => [
                    'Effective risk management is not about eliminating uncertainty — it is about understanding it. We help you map material risks, assign ownership, and embed controls that protect value.',
                    'Our advisors support compliance, internal audit readiness, and continuous improvement across finance, operations, and people.',
                ],
                'highlights' => ['Risk registers', 'Control design', 'Compliance support', 'Scenario planning'],
            ],
            'business-consulting' => [
                'slug' => 'business-consulting',
                'title' => 'Business Consulting',
                'tagline' => 'Hands-on support for complex challenges',
                'excerpt' => 'Targeted consulting engagements to solve specific problems — from process improvement to turnaround and transformation.',
                'icon' => 'fa-people-group',
                'body' => [
                    'When you need focused expertise on a defined initiative, our consultants embed with your team to deliver measurable outcomes.',
                    'We bring structure to change programs, M&A readiness, cost reduction, and post-merger integration.',
                ],
                'highlights' => ['Process optimisation', 'Change management', 'Cost reduction', 'PMO support'],
            ],
            'strategic-planning' => [
                'slug' => 'strategic-planning',
                'title' => 'Strategic Planning',
                'tagline' => 'Clarity of direction. Alignment of effort.',
                'excerpt' => 'Facilitated planning sessions and multi-year roadmaps that connect vision, resources, and accountable execution.',
                'icon' => 'fa-compass',
                'body' => [
                    'We guide leadership teams through structured planning — defining priorities, KPIs, and initiatives that move the organisation forward.',
                    'Our frameworks translate ambition into actionable plans your people can own and deliver.',
                ],
                'highlights' => ['Vision workshops', '3-year roadmaps', 'KPI frameworks', 'Executive facilitation'],
            ],
        ];
    }

    /** @return array<int, array{slug: string, title: string}> */
    protected function serviceNav(): array
    {
        return array_map(fn ($s) => ['slug' => $s['slug'], 'title' => $s['title']], array_values($this->servicesDetail()));
    }

    public static function serviceSlugs(): array
    {
        return array_keys((new self)->servicesDetail());
    }

    /** @return Collection<int, Article> */
    protected function advisoryArticles(int $limit): Collection
    {
        try {
            return Article::published()
                ->forDomain('advisory')
                ->latest('published_at')
                ->take($limit)
                ->get();
        } catch (\Throwable) {
            return collect();
        }
    }

    protected function advisoryArticlesPaginated(int $perPage)
    {
        try {
            return Article::published()
                ->forDomain('advisory')
                ->latest('published_at')
                ->paginate($perPage);
        } catch (\Throwable) {
            return $this->emptyArticlePaginator($perPage);
        }
    }

    protected function emptyArticlePaginator(int $perPage): LengthAwarePaginator
    {
        return new LengthAwarePaginator(
            [],
            0,
            $perPage,
            Paginator::resolveCurrentPage(),
            [
                'path' => Paginator::resolveCurrentPath(),
                'query' => request()->query(),
            ]
        );
    }

    /** @return Collection<int, Team> */
    protected function advisoryTeam(): Collection
    {
        try {
            return Team::active()->forDomain('advisory')->orderBy('sort_order')->get();
        } catch (\Throwable) {
            return collect();
        }
    }

    /** @return Collection<int, Testimonial> */
    protected function advisoryTestimonials(): Collection
    {
        try {
            return Testimonial::active()
                ->forDomain('advisory')
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();
        } catch (\Throwable) {
            return collect();
        }
    }

    protected function advisoryFeaturedTestimonial(): ?Testimonial
    {
        try {
            return Testimonial::active()
                ->forDomain('advisory')
                ->where('is_featured', true)
                ->orderBy('sort_order')
                ->first();
        } catch (\Throwable) {
            return null;
        }
    }
}
