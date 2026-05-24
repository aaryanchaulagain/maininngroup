<?php

use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CalculatorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageContentController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\Advisory\ArticleController as AdvisoryArticleController;
use App\Http\Controllers\Admin\Advisory\TeamController as AdvisoryTeamController;
use App\Http\Controllers\Admin\Advisory\TestimonialController as AdvisoryTestimonialController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Legacy URLs → site-scoped routes
    Route::redirect('contacts', 'main/contacts');
    Route::redirect('articles', 'tax/articles');
    Route::redirect('teams', 'tax/teams');
    Route::redirect('testimonials', 'tax/testimonials');
    Route::redirect('calculators', 'tax/calculators');
    Route::redirect('contents', 'loan/contents');

    Route::prefix('main')->name('main.')->middleware('admin.site:main')->group(function () {
        Route::get('contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::get('contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
        Route::patch('contacts/{contact}/approve', [AdminContactController::class, 'approve'])->name('contacts.approve');
        Route::delete('contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
    });

    Route::prefix('tax')->name('tax.')->middleware('admin.site:tax')->group(function () {
        Route::get('contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::get('contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
        Route::patch('contacts/{contact}/approve', [AdminContactController::class, 'approve'])->name('contacts.approve');
        Route::delete('contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');

        Route::resource('articles', ArticleController::class)->except(['show']);
        Route::resource('teams', TeamController::class);
        Route::get('teams/{team}/intro', [TeamController::class, 'editIntro'])->name('teams.intro.edit');
        Route::put('teams/{team}/intro', [TeamController::class, 'updateIntro'])->name('teams.intro.update');
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('calculators', CalculatorController::class);
    });

    Route::prefix('loan')->name('loan.')->middleware('admin.site:loan')->group(function () {
        Route::get('contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::get('contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
        Route::patch('contacts/{contact}/approve', [AdminContactController::class, 'approve'])->name('contacts.approve');
        Route::delete('contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');

        Route::resource('contents', PageContentController::class)->parameters(['contents' => 'content']);
        Route::resource('teams', TeamController::class);
        Route::get('teams/{team}/intro', [TeamController::class, 'editIntro'])->name('teams.intro.edit');
        Route::put('teams/{team}/intro', [TeamController::class, 'updateIntro'])->name('teams.intro.update');
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('articles', ArticleController::class)->except(['show']);
    });

    Route::prefix('advisory')->name('advisory.')->middleware('admin.site:advisory')->group(function () {
        Route::get('/', fn () => redirect()->route('admin.advisory.contacts.index'));

        Route::get('contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::get('contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
        Route::patch('contacts/{contact}/approve', [AdminContactController::class, 'approve'])->name('contacts.approve');
        Route::delete('contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');

        Route::resource('articles', AdvisoryArticleController::class)->except(['show']);
        Route::resource('teams', AdvisoryTeamController::class)->except(['show']);
        Route::get('teams/{team}/intro', [AdvisoryTeamController::class, 'editIntro'])->name('teams.intro.edit');
        Route::put('teams/{team}/intro', [AdvisoryTeamController::class, 'updateIntro'])->name('teams.intro.update');
        Route::resource('testimonials', AdvisoryTestimonialController::class)->except(['show']);
    });
});
