<?php

namespace App\Http\Controllers\Loan;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReferRequest;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\PageContent;
use App\Models\Testimonial;
use App\Services\LeadMailService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Throwable;

class LoanController extends Controller
{
    public function __construct(
        protected LeadMailService $mailService
    ) {}
    public function home()
    {
        return view('loan.home', [
            'recentArticles' => Article::published()->forDomain('loan')->latest('published_at')->take(2)->get(),
            'featuredTestimonial' => $this->featuredTestimonial(),
        ]);
    }

    public function services()
    {
        return view('loan.services', [
            'services' => $this->loanServiceNav(),
            ...$this->sharedContent(),
        ]);
    }

    public function service(string $slug)
    {
        $services = $this->loanServicesDetail();
        abort_unless(isset($services[$slug]), 404);

        if ($slug === 'home-loan') {
            return view('loan.services.home-loan', $this->sharedContent());
        }

        if ($slug === 'investment-loan') {
            return view('loan.services.investment-loan', $this->sharedContent());
        }

        if ($slug === 'refinancing') {
            return view('loan.services.refinancing', $this->sharedContent());
        }

        if ($slug === 'asset-finance') {
            return view('loan.services.asset-finance', $this->sharedContent());
        }

        if ($slug === 'commercial-finance') {
            return view('loan.services.commercial-finance', $this->sharedContent());
        }

        if ($slug === 'mortgage-and-loan') {
            return view('loan.services.mortgage-and-loan', $this->sharedContent());
        }

        return view('loan.services.show', [
            'service' => $services[$slug],
            'slug' => $slug,
            'allServices' => $this->loanServiceNav(),
            ...$this->sharedContent(),
        ]);
    }

    public function about()
    {
        return view('loan.about', [
            'testimonials' => Testimonial::query()
                ->active()
                ->forDomain('loan')
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get(),
        ]);
    }

    public function bankVs()
    {
        return view('loan.about.bank-vs', $this->sharedContent());
    }

    public function refer()
    {
        return view('loan.about.refer', $this->sharedContent());
    }

    public function storeRefer(ReferRequest $request): RedirectResponse
    {
        $contact = Contact::create($request->contactPayload());

        try {
            $this->mailService->sendAdminLeadNotification($contact);
        } catch (\Throwable $e) {
            report($e);
        }

        return redirect()
            ->route('loan.about.refer')
            ->with('success', 'Thank you for your message. It has been sent.');
    }

    public function team()
    {
        return view('loan.about.team', $this->sharedContent());
    }

    public function articles()
    {
        return view('loan.articles', [
            'articles' => Article::published()->forDomain('loan')->latest('published_at')->paginate(9),
            ...$this->sharedContent(),
        ]);
    }

    public function showArticle(Article $article)
    {
        abort_unless($article->published && $article->source_domain === 'loan', 404);

        return view('loan.articles.show', [
            'article' => $article,
            ...$this->sharedContent(),
        ]);
    }

    public function faq()
    {
        return view('loan.faq', [
            'faqs' => Faq::active()->forDomain('loan')->orderBy('sort_order')->get(),
            ...$this->sharedContent(),
        ]);
    }

    public function calculator()
    {
        return view('loan.calculator', $this->sharedContent());
    }

    public function contact()
    {
        return view('loan.contact', $this->sharedContent());
    }

    protected function featuredTestimonial(): ?Testimonial
    {
        return Testimonial::query()
            ->active()
            ->forDomain('loan')
            ->where('is_featured', true)
            ->orderBy('sort_order')
            ->first()
            ?? Testimonial::query()
                ->active()
                ->forDomain('loan')
                ->orderBy('sort_order')
                ->first();
    }

    protected function sharedContent(): array
    {
        return [
            'heroTitle' => PageContent::get('loan', 'hero', 'title', 'Luxury lending. Engineered for you.'),
            'heroSubtitle' => PageContent::get('loan', 'hero', 'subtitle', 'Boutique mortgage solutions with institutional reach and personal service.'),
        ];
    }

    /** @return array<int, array{slug: string, title: string}> */
    protected function loanServiceNav(): array
    {
        return array_map(fn ($s) => ['slug' => $s['slug'], 'title' => $s['title']], array_values($this->loanServicesDetail()));
    }

    /** @return array<string, array{slug: string, title: string, icon: string, tagline: string, intro: array<int, string>, highlights: array<int, string>}> */
    protected function loanServicesDetail(): array
    {
        return [
            'home-loan' => [
                'slug' => 'home-loan',
                'title' => 'Home Loan',
                'icon' => 'fa-house-user',
                'tagline' => 'Finance your place to call home',
                'intro' => [
                    'Buying your first home or your next property should be exciting — not overwhelming.',
                    'We compare lending options across the market to find competitive rates and structures suited to your income, deposit, and long-term goals.',
                ],
                'highlights' => [
                    'First home buyer guidance and grants support',
                    'Pre-approval so you can buy with confidence',
                    'Owner-occupied and upgrade pathways',
                    'Clear explanation of fees, features, and repayments',
                    'Support from application through to settlement',
                ],
            ],
            'investment-loan' => [
                'slug' => 'investment-loan',
                'title' => 'Investment Loan',
                'icon' => 'fa-chart-line',
                'tagline' => 'Build wealth through property',
                'intro' => [
                    'Strategic property investment requires the right loan structure from day one.',
                    'We help investors access lending that supports cash flow, tax efficiency, and portfolio growth across residential and mixed portfolios.',
                ],
                'highlights' => [
                    'Interest-only and principal & interest options',
                    'Portfolio and cross-collateral structuring advice',
                    'Equity release for further investment',
                    'SMSF property lending coordination',
                    'Ongoing review as your portfolio evolves',
                ],
            ],
            'refinancing' => [
                'slug' => 'refinancing',
                'title' => 'Refinancing',
                'icon' => 'fa-hand-holding-usd',
                'tagline' => 'Improve your loan and save',
                'intro' => [
                    'If your circumstances have changed or your rate is no longer competitive, refinancing can unlock savings and better features.',
                    'We review your current loan against the market and manage the switch with minimal disruption.',
                ],
                'highlights' => [
                    'Rate and fee comparison across lenders',
                    'Debt consolidation where appropriate',
                    'Cash-out for renovation or investment',
                    'Break-cost and timing analysis',
                    'Streamlined refinance application support',
                ],
            ],
            'asset-finance' => [
                'slug' => 'asset-finance',
                'title' => 'Asset Finance',
                'icon' => 'fa-car',
                'tagline' => 'Fund vehicles and equipment',
                'intro' => [
                    'From vehicles to business equipment, asset finance helps you acquire what you need while preserving working capital.',
                    'We source flexible terms aligned with how you use and repay the asset.',
                ],
                'highlights' => [
                    'Motor vehicle and fleet finance',
                    'Chattel mortgage and lease structures',
                    'Competitive rates for individuals and businesses',
                    'Fast approvals for urgent purchases',
                    'Tailored terms to match asset life',
                ],
            ],
            'commercial-finance' => [
                'slug' => 'commercial-finance',
                'title' => 'Commercial Finance',
                'icon' => 'fa-building',
                'tagline' => 'Lending for business growth',
                'intro' => [
                    'Commercial lending supports property acquisition, business expansion, and operational funding with structures built for commercial risk and cash flow.',
                    'We work with business owners to present strong applications and secure appropriate facilities.',
                ],
                'highlights' => [
                    'Commercial property purchase and refinance',
                    'Business acquisition and expansion funding',
                    'Self-employed and complex income assessment',
                    'Development and short-term facility introductions',
                    'Ongoing relationship as your business grows',
                ],
            ],
            'mortgage-and-loan' => [
                'slug' => 'mortgage-and-loan',
                'title' => 'Mortgage and Loan',
                'icon' => 'fa-file-invoice-dollar',
                'tagline' => 'Clear guidance on mortgages and lending',
                'intro' => [
                    'A mortgage is a contract in which property is used as security for a loan, allowing you to purchase residential or commercial real estate without paying the full value upfront.',
                    'At Innovative Finance, we help you understand how mortgages work, compare lender options, and secure lending structures suited to your goals.',
                ],
                'highlights' => [
                    'Residential and commercial mortgage solutions',
                    'Guidance on repayments, interest, and loan terms',
                    'Access to major banks and specialist lenders',
                    'Support for first home buyers and investors',
                    'Personalised advice from application to settlement',
                ],
            ],
        ];
    }
}
