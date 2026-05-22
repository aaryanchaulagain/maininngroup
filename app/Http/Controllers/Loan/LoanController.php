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

        $this->mailService->sendAdminLeadNotification($contact);

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
}
