<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class TeamController extends Controller
{
    public function index(): View
    {
        return view('admin.teams.index', [
            'teams' => Team::orderBy('sort_order')->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.teams.form', ['team' => new Team(['source_domain' => 'tax', 'active' => true])]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedProfile($request);
        $data['photo'] = $this->resolvePhoto($request);

        $team = Team::create($data);

        return redirect()
            ->route('admin.teams.intro.edit', $team)
            ->with('success', 'Team member saved. Add their profile introduction next.');
    }

    public function edit(Team $team): View
    {
        return view('admin.teams.form', compact('team'));
    }

    public function update(Request $request, Team $team): RedirectResponse
    {
        $data = $this->validatedProfile($request, $team);
        $data['photo'] = $this->resolvePhoto($request, $team);

        if ($request->filled('slug')) {
            $slug = $request->string('slug')->trim()->toString();
            $request->validate([
                'slug' => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('teams')->where('source_domain', $team->source_domain)->ignore($team->id),
                ],
            ]);
            $data['slug'] = $slug;
        }

        $team->update($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team member updated.');
    }

    public function editIntro(Team $team): View
    {
        return view('admin.teams.intro', compact('team'));
    }

    public function updateIntro(Request $request, Team $team): RedirectResponse
    {
        $data = $request->validate([
            'title_label' => 'nullable|string|max:100',
            'role' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
        ]);

        $team->update($data);

        return redirect()->route('admin.teams.index')->with('success', 'Profile introduction saved.');
    }

    public function destroy(Team $team): RedirectResponse
    {
        $this->deleteStoredPhoto($team->photo);
        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team member deleted.');
    }

    protected function validatedProfile(Request $request, ?Team $team = null): array
    {
        if ($request->input('sort_order') === '' || $request->input('sort_order') === null) {
            $request->merge(['sort_order' => 0]);
        }

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
            'slug' => 'nullable|string|max:255',
        ]);

        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);
        $data['active'] = $request->boolean('active');
        unset($data['photo_file'], $data['remove_photo'], $data['slug']);

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
