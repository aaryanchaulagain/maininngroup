<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageContentController extends Controller
{
    public function index(Request $request): View
    {
        $query = PageContent::query()->orderBy('source_domain')->orderBy('section');

        if ($request->filled('domain')) {
            $query->where('source_domain', $request->domain);
        }

        return view('admin.contents.index', [
            'contents' => $query->paginate(20)->withQueryString(),
        ]);
    }

    public function create(): View
    {
        return view('admin.contents.form', ['content' => new PageContent]);
    }

    public function store(Request $request): RedirectResponse
    {
        PageContent::create($this->validated($request));

        return redirect()->route('admin.contents.index')->with('success', 'Content saved.');
    }

    public function edit(PageContent $content): View
    {
        return view('admin.contents.form', compact('content'));
    }

    public function update(Request $request, PageContent $content): RedirectResponse
    {
        $content->update($this->validated($request));

        return redirect()->route('admin.contents.index')->with('success', 'Content updated.');
    }

    public function destroy(PageContent $content): RedirectResponse
    {
        $content->delete();

        return redirect()->route('admin.contents.index')->with('success', 'Content deleted.');
    }

    protected function validated(Request $request): array
    {
        return $request->validate([
            'source_domain' => 'required|in:main,tax,loan',
            'section' => 'required|string|max:100',
            'key' => 'required|string|max:100',
            'value' => 'nullable|string',
            'type' => 'required|in:text,html,json',
        ]);
    }
}
