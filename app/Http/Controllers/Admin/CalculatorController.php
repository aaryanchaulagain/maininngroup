<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesAdminSite;
use App\Http\Controllers\Controller;
use App\Models\Calculator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CalculatorController extends Controller
{
    use HandlesAdminSite;

    public function index(): View
    {
        return view('admin.calculators.index', [
            'calculators' => Calculator::forDomain($this->adminSiteKey())->latest()->paginate(15),
            'adminSite' => $this->adminSite(),
        ]);
    }

    public function create(): View
    {
        return view('admin.calculators.form', [
            'calculator' => new Calculator(['source_domain' => 'tax', 'active' => true]),
            'adminSite' => $this->adminSite(),
            'siteLocked' => true,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['slug'] = Str::slug($data['slug'] ?? $data['name']);
        $data['config'] = json_decode($data['config_json'] ?? '{}', true);
        unset($data['config_json']);

        Calculator::create($data);

        return $this->redirectToAdmin('calculators.index', [], 'success', 'Calculator created.');
    }

    public function edit(Calculator $calculator): View
    {
        $this->assertModelForSite($calculator);

        return view('admin.calculators.form', [
            'calculator' => $calculator,
            'adminSite' => $this->adminSite(),
            'siteLocked' => true,
        ]);
    }

    public function update(Request $request, Calculator $calculator): RedirectResponse
    {
        $this->assertModelForSite($calculator);

        $data = $this->validated($request);
        $data['slug'] = Str::slug($data['slug'] ?? $data['name']);
        $data['config'] = json_decode($data['config_json'] ?? '{}', true);
        unset($data['config_json']);

        $calculator->update($data);

        return $this->redirectToAdmin('calculators.index', [], 'success', 'Calculator updated.');
    }

    public function destroy(Calculator $calculator): RedirectResponse
    {
        $this->assertModelForSite($calculator);
        $calculator->delete();

        return $this->redirectToAdmin('calculators.index', [], 'success', 'Calculator deleted.');
    }

    protected function validated(Request $request): array
    {
        $data = $request->validate([
            'source_domain' => 'required|in:tax',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'config_json' => 'nullable|string',
            'active' => 'nullable|boolean',
        ]);

        $data['source_domain'] = 'tax';
        $data['active'] = $request->boolean('active');

        return $data;
    }
}
