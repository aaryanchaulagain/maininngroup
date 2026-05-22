<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Loan\LoanController;
use App\Http\Controllers\Main\HomeController;
use App\Http\Controllers\Tax\TaxController;
use Illuminate\Support\Facades\Route;

$useDomains = domain_routing_enabled();

$registerMainRoutes = function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
};

$registerTaxRoutes = function () {
    Route::get('/', [TaxController::class, 'home'])->name('home');

    Route::get('/aboutus', [TaxController::class, 'about'])->name('aboutus');

    Route::prefix('aboutus')->name('about.')->group(function () {
        Route::get('/team', [TaxController::class, 'team'])->name('team');
        Route::get('/team/{slug}', [TaxController::class, 'teamMember'])->name('team.show');
        Route::get('/disclaimer', [TaxController::class, 'disclaimer'])->name('disclaimer');
    });

    Route::redirect('/about', '/aboutus', 301);
    Route::redirect('/about/team', '/aboutus/team', 301);
    Route::redirect('/about/disclaimer', '/aboutus/disclaimer', 301);
    Route::redirect('/about-page', '/aboutus', 301);
    Route::redirect('/about-page/meet-the-team', '/aboutus/team', 301);
    Route::redirect('/about-page/disclaimer', '/aboutus/disclaimer', 301);

    Route::prefix('services')->name('services.')->group(function () {
        Route::get('/', [TaxController::class, 'services'])->name('index');
        Route::get('/accounting', [TaxController::class, 'accounting'])->name('accounting');
        Route::get('/mortgage', [TaxController::class, 'mortgage'])->name('mortgage');
        Route::get('/advisory', [TaxController::class, 'advisory'])->name('advisory');
    });

    Route::redirect('/services-2/speed-optimizations', '/services/accounting', 301);
    Route::redirect('/services-2/digital-services-2', '/services/mortgage', 301);
    Route::redirect('/services-2/marketing-analysis-2', '/services/advisory', 301);

    Route::redirect('/seo-and-backlinking', '/mentoring', 301);

    Route::get('/mentoring', [TaxController::class, 'mentoring'])->name('mentoring');
    Route::get('/perspective', [TaxController::class, 'perspective'])->name('perspective');
    Route::redirect('/stamp-duty-calculator', '/calculator', 301);
    Route::get('/calculator', [TaxController::class, 'calculator'])->name('calculator');
    Route::redirect('/tax', '/tax-lodgement', 301);
    Route::get('/tax-lodgement', [TaxController::class, 'taxLodgement'])->name('tax');
    Route::get('/contact', [TaxController::class, 'contact'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
};

$registerLoanRoutes = function () {
    Route::get('/', [LoanController::class, 'home'])->name('home');

    Route::get('/about', [LoanController::class, 'about'])->name('about');

    Route::prefix('about')->name('about.')->group(function () {
        Route::get('/bank-vs', [LoanController::class, 'bankVs'])->name('bank-vs');
        Route::get('/refer', [LoanController::class, 'refer'])->name('refer');
        Route::post('/refer', [LoanController::class, 'storeRefer'])->name('refer.store');
        Route::get('/team', [LoanController::class, 'team'])->name('team');
    });

    Route::get('/articles', [LoanController::class, 'articles'])->name('articles');
    Route::get('/articles/{article:slug}', [LoanController::class, 'showArticle'])->name('articles.show');
    Route::get('/faq', [LoanController::class, 'faq'])->name('faq');
    Route::get('/contact', [LoanController::class, 'contact'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
};

if ($useDomains) {
    Route::domain(config('domains.main'))->name('main.')->group($registerMainRoutes);
    Route::domain(config('domains.tax'))->name('tax.')->group($registerTaxRoutes);
    Route::domain(config('domains.loan'))->name('loan.')->group($registerLoanRoutes);
} else {
    $taxPath = domain_path_prefix('tax');
    $loanPath = domain_path_prefix('loan');

    Route::name('main.')->group($registerMainRoutes);
    Route::prefix($taxPath)->name('tax.')->group($registerTaxRoutes);
    Route::prefix($loanPath)->name('loan.')->group($registerLoanRoutes);

    // Old path prefixes → innovativetax / innovativeloan
    Route::redirect('/tax', "/{$taxPath}", 301);
    Route::redirect('/loan', "/{$loanPath}", 301);
    Route::get('/tax/{path}', fn (string $path) => redirect("/{$taxPath}/{$path}", 301))->where('path', '.*');
    Route::get('/loan/{path}', fn (string $path) => redirect("/{$loanPath}/{$path}", 301))->where('path', '.*');

    // Local dev: same paths as innovativetax.inngroup/aboutus (no path prefix on subdomain)
    Route::redirect('/aboutus', "/{$taxPath}/aboutus", 301);
    Route::redirect('/aboutus/team', "/{$taxPath}/aboutus/team", 301);
    Route::redirect('/aboutus/disclaimer', "/{$taxPath}/aboutus/disclaimer", 301);
    Route::redirect('/about-page', "/{$taxPath}/aboutus", 301);
    Route::redirect('/about-page/meet-the-team', "/{$taxPath}/aboutus/team", 301);
    Route::redirect('/about-page/disclaimer', "/{$taxPath}/aboutus/disclaimer", 301);
    Route::redirect('/services', "/{$taxPath}/services", 301);
    Route::redirect('/home-one/services-3', "/{$taxPath}/services", 301);
    Route::redirect('/services-3', "/{$taxPath}/services", 301);
    Route::redirect('/services-2/speed-optimizations', "/{$taxPath}/services/accounting", 301);
    Route::redirect('/services-2/digital-services-2', "/{$taxPath}/services/mortgage", 301);
    Route::redirect('/services/accounting-and-taxation', "/{$taxPath}/services/accounting", 301);
    Route::redirect('/services/mortgage-and-finance', "/{$taxPath}/services/mortgage", 301);
    Route::redirect('/services-2/marketing-analysis-2', "/{$taxPath}/services/advisory", 301);
    Route::redirect('/services/business-advisory', "/{$taxPath}/services/advisory", 301);
    Route::redirect('/services/business-advisory-services', "/{$taxPath}/services/advisory", 301);
    Route::redirect('/seo-and-backlinking', "/{$taxPath}/mentoring", 301);
    Route::redirect('/stamp-duty-calculator', "/{$taxPath}/calculator", 301);
    Route::redirect("/{$taxPath}/tax", "/{$taxPath}/tax-lodgement", 301);
}
