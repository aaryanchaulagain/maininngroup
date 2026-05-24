<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesAdminSite;
use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageContentController extends Controller
{
    use HandlesAdminSite;

    public function index(Request $request): View
    {
        return view('admin.contents.index', [
            'contents' => PageContent::query()
                ->where('source_domain', $this->adminSiteKey())
                ->orderBy('section')
                ->paginate(20),
            'adminSite' => $this->adminSite(),
        ]);
    }

    public function create(): View
    {
        return view('admin.contents.form', [
            'content' => new PageContent(['source_domain' => 'loan']),
            'adminSite' => $this->adminSite(),
            'siteLocked' => true,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        PageContent::create($this->validated($request));

        return $this->redirectToAdmin('contents.index', [], 'success', 'Content saved.');
    }

    public function edit(PageContent $content): View
    {
        $this->assertModelForSite($content);

        return view('admin.contents.form', [
            'content' => $content,
            'adminSite' => $this->adminSite(),
            'siteLocked' => true,
        ]);
    }

    public function update(Request $request, PageContent $content): RedirectResponse
    {
        $this->assertModelForSite($content);
        $content->update($this->validated($request));

        return $this->redirectToAdmin('contents.index', [], 'success', 'Content updated.');
    }

    public function destroy(PageContent $content): RedirectResponse
    {
        $this->assertModelForSite($content);
        $content->delete();

        return $this->redirectToAdmin('contents.index', [], 'success', 'Content deleted.');
    }

    protected function validated(Request $request): array
    {
        $data = $request->validate([
            'source_domain' => 'required|in:loan',
            'section' => 'required|string|max:100',
            'key' => 'required|string|max:100',
            'value' => 'nullable|string',
            'type' => 'required|in:text,html,json',
        ]);

        $data['source_domain'] = 'loan';

        return $data;
    }
}
