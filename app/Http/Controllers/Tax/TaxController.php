<?php

namespace App\Http\Controllers\Tax;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use App\Models\Team;

class TaxController extends Controller
{
    public function home()
    {
        return view('tax.home', [
            'team' => Team::active()->forDomain('tax')->orderBy('sort_order')->take(4)->get(),
            'services' => $this->taxServices(),
            ...$this->sharedContent(),
        ]);
    }

    public function services()
    {
        return view('tax.services.index', [
            'services' => $this->taxServices(),
            ...$this->sharedContent(),
        ]);
    }

    public function about()
    {
        return view('tax.about.index', $this->sharedContent());
    }

    public function team()
    {
        return view('tax.about.team', [
            'team' => Team::active()->forDomain('tax')->orderBy('sort_order')->get(),
            ...$this->sharedContent(),
        ]);
    }

    public function teamMember(string $slug)
    {
        $member = Team::active()->forDomain('tax')->where('slug', $slug)->firstOrFail();

        return view('tax.about.team-member', [
            'member' => $member,
            ...$this->sharedContent(),
        ]);
    }

    public function disclaimer()
    {
        return view('tax.about.disclaimer', $this->sharedContent());
    }

    public function accounting()
    {
        return view('tax.services.accounting', $this->sharedContent());
    }

    public function mortgage()
    {
        return redirect(domain_url('loan', 'services/mortgage-and-loan'), 301);
    }

    public function advisory()
    {
        return view('tax.services.advisory', $this->sharedContent());
    }

    public function basGst()
    {
        return view('tax.services.bas-gst', $this->sharedContent());
    }

    public function smsf()
    {
        return view('tax.services.smsf', $this->sharedContent());
    }

    public function compliance()
    {
        return view('tax.services.compliance', $this->sharedContent());
    }

    public function mentoring()
    {
        return view('tax.mentoring', $this->sharedContent());
    }

    public function perspective()
    {
        return view('tax.perspective', $this->sharedContent());
    }

    public function calculator()
    {
        return view('tax.calculator', $this->sharedContent());
    }

    public function taxLodgement()
    {
        return view('tax.tax', $this->sharedContent());
    }

    public function contact()
    {
        return view('tax.contact', $this->sharedContent());
    }

    protected function sharedContent(): array
    {
        return [
            'heroTitle' => PageContent::get('tax', 'hero', 'title', 'Clarity in tax. Confidence in growth.'),
            'heroSubtitle' => PageContent::get('tax', 'hero', 'subtitle', 'Accounting, taxation, lending advisory and mentoring for ambitious clients.'),
        ];
    }

    protected function taxServices(): array
    {
        return [
            [
                'icon' => 'zimed-new-icon-secure-payment',
                'title' => 'Accounting and Taxation',
                'text' => 'We are dedicated to providing quality, professional accounting solutions to small and medium business.',
                'url' => route('tax.services.accounting'),
            ],
            [
                'icon' => 'zimed-new-icon-link',
                'title' => 'Business Advisory',
                'text' => 'Whether you want to invest or refinance, ensure your current home loan is still the right one for you, we can help.',
                'url' => route('tax.services.advisory'),
            ],
            [
                'icon' => 'zimed-new-icon-goal',
                'title' => 'BAS / GST',
                'text' => 'GST registration, BAS preparation, lodgement, and reconciliation support for compliant reporting.',
                'url' => route('tax.services.bas-gst'),
            ],
            [
                'icon' => 'zimed-new-icon-family1',
                'title' => 'SMSF',
                'text' => 'Self-managed super fund setup, administration, audit coordination, and trustee compliance.',
                'url' => route('tax.services.smsf'),
            ],
            [
                'icon' => 'zimed-new-icon-lock',
                'title' => 'Compliance',
                'text' => 'Tax, corporate, and regulatory compliance support to protect your business and directors.',
                'url' => route('tax.services.compliance'),
            ],
            [
                'icon' => 'zimed-new-icon-brainstorm',
                'title' => 'Mentoring Program',
                'text' => 'We understand the importance of mentoring so we compiled a program to help you through your mortgage broker journey.',
                'url' => route('tax.mentoring'),
            ],
            [
                'icon' => 'zimed-new-icon-settings',
                'title' => 'Financial Planning',
                'text' => 'We provide complete financial planning so that you can immediately commence your business as a partner or sole trader.',
                'url' => route('tax.contact'),
            ],
            [
                'icon' => 'zimed-icon-app-development',
                'title' => 'Book keeping & Payroll',
                'text' => 'We specialise in providing customised, flexible and cost effective bookkeeping solutions for our clients for ease of mind.',
                'url' => route('tax.contact'),
            ],
        ];
    }
}
