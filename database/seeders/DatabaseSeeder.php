<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Calculator;
use App\Models\Faq;
use App\Models\PageContent;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@inngroup.com.au'],
            [
                'name' => 'INN Admin',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        foreach ([
            ['main', 'hero', 'title', 'Intelligent finance for modern Australia'],
            ['main', 'hero', 'subtitle', 'Tax excellence and lending solutions under one trusted group.'],
            ['tax', 'hero', 'title', 'Clarity in tax. Confidence in growth.'],
            ['tax', 'hero', 'subtitle', 'Accounting, taxation, lending advisory and mentoring.'],
            ['loan', 'hero', 'title', 'Luxury lending. Engineered for you.'],
            ['loan', 'hero', 'subtitle', 'Boutique mortgage solutions with institutional reach.'],
        ] as [$domain, $section, $key, $value]) {
            PageContent::updateOrCreate(
                ['source_domain' => $domain, 'section' => $section, 'key' => $key],
                ['value' => $value, 'type' => 'text']
            );
        }

        Calculator::updateOrCreate(
            ['slug' => 'income-tax'],
            [
                'source_domain' => 'tax',
                'name' => 'Income Tax Estimator',
                'config' => ['rate' => 0.325],
                'description' => 'Illustrative Australian income tax estimate',
                'active' => true,
            ]
        );

        $loanFaqQuestions = collect(config('loan_faq.items', []))->pluck('question');
        Faq::forDomain('loan')->whereNotIn('question', $loanFaqQuestions)->update(['active' => false]);

        foreach (config('loan_faq.items', []) as $i => $item) {
            Faq::updateOrCreate(
                ['source_domain' => 'loan', 'question' => $item['question']],
                ['answer' => $item['answer'], 'sort_order' => $i, 'active' => true]
            );
        }

        Team::updateOrCreate(
            ['source_domain' => 'tax', 'name' => 'Sarah Mitchell'],
            ['role' => 'Principal Tax Agent', 'bio' => '20+ years in taxation and business advisory.', 'sort_order' => 0, 'active' => true]
        );

        Team::updateOrCreate(
            ['source_domain' => 'loan', 'name' => 'James Chen'],
            ['role' => 'Senior Mortgage Broker', 'bio' => 'Specialist in luxury residential and investment lending.', 'sort_order' => 0, 'active' => true]
        );

        $loanCdn = 'https://innovativewealth.com.au/wp-content/uploads';
        Testimonial::updateOrCreate(
            ['source_domain' => 'loan', 'author' => 'Dharma Adhikari'],
            [
                'title' => 'Phenomenal',
                'quote' => 'Buying my first home was tough – getting loan approved, dealing with agents, solicitors and going through property reports can become overwhelming. Innovative Wealth guided me through each steps with completely hassle free.',
                'image' => $loanCdn.'/2020/12/dharma-adhikari-300x232.jpg',
                'is_featured' => true,
                'sort_order' => 0,
                'active' => true,
            ]
        );
        Testimonial::updateOrCreate(
            ['source_domain' => 'loan', 'author' => 'Bhoma Limbu'],
            [
                'title' => 'Incredible',
                'quote' => "It was hard and tough to manage multiple debts of credit cards, personal loan and one car loan. Didn't value in my property were increased, that's when, Shamim from Innovative Wealth got me a free valuation of my property and consolidate all my loan into one with one low repayment and low interest rate.",
                'image' => $loanCdn.'/2020/12/bhoma_limbu.jpg',
                'is_featured' => false,
                'sort_order' => 1,
                'active' => true,
            ]
        );

        $cdn = 'https://innovativewealth.com.au/wp-content/uploads';
        Article::updateOrCreate(
            ['slug' => 'how-to-buy-a-first-home-with-big-price-growth-potential'],
            [
                'source_domain' => 'loan',
                'title' => 'How To Buy A First Home With Big Price Growth Potential',
                'excerpt' => "When new home-buyers seek out their first abode, it's not often high on their priority list to seek out a ...",
                'body' => "When new home-buyers seek out their first abode, it's not often high on their priority list to seek out a property with big price growth potential. Innovative Wealth helps first-time buyers understand suburbs, lending structure, and long-term wealth outcomes.",
                'image' => $cdn.'/2020/12/property_growth.png',
                'published' => true,
                'published_at' => '2020-12-11 02:11:30',
            ]
        );
        Article::updateOrCreate(
            ['slug' => 'six-steps-to-finding-undervalued-properties'],
            [
                'source_domain' => 'loan',
                'title' => 'Six Steps To Finding Undervalued Properties',
                'excerpt' => 'Most investors would want to score an undervalued property in a highly challenging market. This task requires loads of research ...',
                'body' => 'Most investors would want to score an undervalued property in a highly challenging market. This task requires loads of research, local knowledge, and the right finance structure. These six steps outline how Innovative Wealth approaches undervalued property opportunities.',
                'image' => $cdn.'/2020/12/bargain-e1607652918574.jpg',
                'published' => true,
                'published_at' => '2020-12-11 02:07:21',
            ]
        );
        Article::updateOrCreate(
            ['slug' => 'rate-outlook-2026'],
            [
                'source_domain' => 'loan',
                'title' => '2026 Rate Outlook for Australian Borrowers',
                'excerpt' => 'What shifting RBA signals mean for your next property move.',
                'body' => 'Full article content managed via admin panel.',
                'published' => true,
                'published_at' => now(),
            ]
        );
    }
}
