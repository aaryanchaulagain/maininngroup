<?php

use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CalculatorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PageContentController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
    Route::patch('contacts/{contact}/approve', [AdminContactController::class, 'approve'])->name('contacts.approve');
    Route::delete('contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');

    Route::resource('articles', ArticleController::class);
    Route::resource('teams', TeamController::class);
    Route::get('teams/{team}/intro', [TeamController::class, 'editIntro'])->name('teams.intro.edit');
    Route::put('teams/{team}/intro', [TeamController::class, 'updateIntro'])->name('teams.intro.update');
    Route::resource('faqs', FaqController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('calculators', CalculatorController::class);
    Route::resource('contents', PageContentController::class)->parameters(['contents' => 'content']);
});
