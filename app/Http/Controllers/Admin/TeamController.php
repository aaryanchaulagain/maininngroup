<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesAdminSite;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class TeamController extends Controller
{
    use HandlesAdminSite;

    public function index(): View
    {
        return view('admin.teams.index', [
            'teams' => Team::forDomain($this->adminSiteKey())->orderBy('sort_order')->paginate(15),
            'adminSite' => $this->adminSite(),
        ]);
    }

    public function create(): View
    {
        return view('admin.teams.form', [
            'team' => new Team(['source_domain' => $this->adminSiteKey(), 'active' => true]),
            'adminSite' => $this->adminSite(),
            'siteLocked' => true,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedProfile($request);
        $data['photo'] = $this->resolvePhoto($request);

        $team = Team::create($data);

        return $this->redirectToAdmin('teams.intro.edit', ['team' => $team], 'success', 'Team member saved. Add their profile introduction next.');
    }

    public function edit(Team $team): View
    {
        $this->assertModelForSite($team);

        return view('admin.teams.form', [
            'team' => $team,
            'adminSite' => $this->adminSite(),
            'siteLocked' => true,
        ]);
    }

    public function update(Request $request, Team $team): RedirectResponse
    {
        $this->assertModelForSite($team);

        $data = $this->validatedProfile($request, $team);
        $data['photo'] = $this->resolvePhoto($request, $team);

        $team->update($data);

        return $this->redirectToAdmin('teams.index', [], 'success', 'Team member updated.');
    }

    public function editIntro(Team $team): View
    {
        $this->assertModelForSite($team);

        return view('admin.teams.intro', [
            'team' => $team,
            'adminSite' => $this->adminSite(),
        ]);
    }

    public function updateIntro(Request $request, Team $team): RedirectResponse
    {
        $this->assertModelForSite($team);

        $team->update($request->validate([
            'intro' => 'nullable|string',
        ]));

        return $this->redirectToAdmin('teams.index', [], 'success', 'Profile introduction saved.');
    }

    public function destroy(Team $team): RedirectResponse
    {
        $this->assertModelForSite($team);
        $this->deleteStoredPhoto($team->photo);
        $team->delete();

        return $this->redirectToAdmin('teams.index', [], 'success', 'Team member deleted.');
    }

    protected function validatedProfile(Request $request, ?Team $team = null): array
    {
        if ($request->input('sort_order') === '' || $request->input('sort_order') === null) {
            $request->merge(['sort_order' => 0]);
        }

        $domain = $this->adminSiteKey();

        $data = $request->validate([
            'source_domain' => 'required|in:tax,loan',
            'name' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
            'photo' => 'nullable|string|max:2048',
            'photo_file' => 'nullable|image|max:4096',
            'remove_photo' => 'nullable|boolean',
            'email' => 'nullable|email|max:255',
            'office_phone' => 'nullable|string|max:50',
            'phone' => 'nullable|string|max:50',
            'sort_order' => 'nullable|integer|min:0',
            'active' => 'nullable|boolean',
            'slug' => [
                'nullable',
                'string',
                'max:255',
                Rule::unique('teams')->where('source_domain', $domain)->ignore($team?->id),
            ],
        ]);

        $data['source_domain'] = $domain;
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);
        $data['active'] = $request->boolean('active');
        unset($data['photo_file'], $data['remove_photo']);

        return $data;
    }

    protected function resolvePhoto(Request $request, ?Team $team = null): ?string
    {
        if ($request->boolean('remove_photo')) {
            $this->deleteStoredPhoto($team?->photo);

            return null;
        }

        if ($request->hasFile('photo_file')) {
            $this->deleteStoredPhoto($team?->photo);

            return $request->file('photo_file')->store('team', 'public');
        }

        if ($request->filled('photo')) {
            $this->deleteStoredPhoto($team?->photo);

            return $request->string('photo')->trim()->toString();
        }

        return $team?->photo;
    }

    protected function deleteStoredPhoto(?string $photo): void
    {
        if (! $photo || str_starts_with($photo, 'http://') || str_starts_with($photo, 'https://')) {
            return;
        }

        Storage::disk('public')->delete($photo);
    }
}
