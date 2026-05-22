<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Calculator;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\PageContent;
use App\Models\Team;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'stats' => [
                'contacts' => Contact::pending()->count(),
                'articles' => Article::count(),
                'team' => Team::count(),
                'faqs' => Faq::count(),
                'calculators' => Calculator::count(),
                'contents' => PageContent::count(),
            ],
            'recentContacts' => Contact::latest()->take(5)->get(),
        ]);
    }
}
