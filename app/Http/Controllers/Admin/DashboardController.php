<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Calculator;
use App\Models\Contact;
use App\Models\PageContent;
use App\Models\Team;
use App\Models\Testimonial;
use App\Services\ContactLeadService;

class DashboardController extends Controller
{
    public function __construct(
        protected ContactLeadService $leadService
    ) {}

    public function index()
    {
        $sites = [];

        foreach (admin_sites() as $key => $config) {
            $domain = $config['domain_key'];
            $sites[$key] = [
                'config' => $config,
                'stats' => $this->statsForSite($key, $domain),
                'pending_contacts' => Contact::pending()->forDomain($domain)->count(),
            ];
        }

        return view('admin.dashboard', [
            'sites' => $sites,
            'recentContacts' => Contact::latest()->take(8)->get(),
        ]);
    }

    protected function statsForSite(string $key, string $domain): array
    {
        return match ($key) {
            'main' => [
                ['label' => 'Contact leads', 'value' => Contact::forDomain($domain)->count()],
            ],
            'tax' => [
                ['label' => 'Articles', 'value' => Article::forDomain($domain)->count()],
                ['label' => 'Team', 'value' => Team::forDomain($domain)->count()],
                ['label' => 'Testimonials', 'value' => Testimonial::forDomain($domain)->count()],
                ['label' => 'Calculators', 'value' => Calculator::forDomain($domain)->count()],
            ],
            'loan' => [
                ['label' => 'Articles', 'value' => Article::forDomain($domain)->count()],
                ['label' => 'Team', 'value' => Team::forDomain($domain)->count()],
                ['label' => 'Testimonials', 'value' => Testimonial::forDomain($domain)->count()],
                ['label' => 'Page blocks', 'value' => PageContent::query()->where('source_domain', $domain)->count()],
            ],
            'advisory' => [
                ['label' => 'Articles', 'value' => Article::forDomain($domain)->count()],
                ['label' => 'Team', 'value' => Team::forDomain($domain)->count()],
                ['label' => 'Testimonials', 'value' => Testimonial::forDomain($domain)->count()],
            ],
            default => [],
        };
    }
}
