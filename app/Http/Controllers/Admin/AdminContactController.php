<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesAdminSite;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Services\ContactLeadService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminContactController extends Controller
{
    use HandlesAdminSite;

    public function __construct(
        protected ContactLeadService $leadService
    ) {}

    public function index(Request $request): View
    {
        $this->authorize('viewAny', Contact::class);

        $filters = [
            'status' => $request->string('status', 'all')->toString(),
            'search' => $request->string('search')->trim()->toString(),
            'sort' => $request->string('sort', 'newest')->toString(),
            'domain' => $this->adminSiteKey(),
        ];

        return view('admin.contacts.index', [
            'contacts' => $this->leadService->paginateLeads($filters),
            'stats' => $this->leadService->getStats($this->adminSiteKey()),
            'filters' => $filters,
            'adminSite' => $this->adminSite(),
        ]);
    }

    public function show(Contact $contact): View
    {
        $this->authorize('view', $contact);
        $this->assertModelForSite($contact);

        $contact->load('approver');

        return view('admin.contacts.show', [
            'contact' => $contact,
            'adminSite' => $this->adminSite(),
        ]);
    }

    public function approve(Contact $contact): RedirectResponse
    {
        $this->assertModelForSite($contact);

        if ($contact->isApproved()) {
            return back()->with('error', 'Already Approved');
        }

        $this->authorize('approve', $contact);

        $result = $this->leadService->approve($contact, auth()->user());

        return back()->with($result['type'], $result['message']);
    }

    public function destroy(Contact $contact): RedirectResponse
    {
        $this->assertModelForSite($contact);
        $this->authorize('delete', $contact);

        $result = $this->leadService->delete($contact);

        if (! $result['success']) {
            return back()->with($result['type'], $result['message']);
        }

        return $this->redirectToAdmin('contacts.index', [], 'success', $result['message']);
    }
}
