<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calculator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CalculatorController extends Controller
{
    public function index(): View
    {
        return view('admin.calculators.index', [
            'calculators' => Calculator::latest()->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.calculators.form', ['calculator' => new Calculator]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['slug'] = Str::slug($data['slug'] ?? $data['name']);
        $data['config'] = json_decode($data['config_json'] ?? '{}', true);
        unset($data['config_json']);

        Calculator::create($data);

        return redirect()->route('admin.calculators.index')->with('success', 'Calculator created.');
    }

    public function edit(Calculator $calculator): View
    {
        return view('admin.calculators.form', compact('calculator'));
    }

    public function update(Request $request, Calculator $calculator): RedirectResponse
    {
        $data = $this->validated($request);
        $data['slug'] = Str::slug($data['slug'] ?? $data['name']);
        $data['config'] = json_decode($data['config_json'] ?? '{}', true);
        unset($data['config_json']);

        $calculator->update($data);

        return redirect()->route('admin.calculators.index')->with('success', 'Calculator updated.');
    }

    public function destroy(Calculator $calculator): RedirectResponse
    {
        $calculator->delete();

        return redirect()->route('admin.calculators.index')->with('success', 'Calculator deleted.');
    }

    protected function validated(Request $request): array
    {
        $data = $request->validate([
            'source_domain' => 'required|in:tax,loan',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'config_json' => 'nullable|string',
            'active' => 'nullable|boolean',
        ]);

        $data['active'] = $request->boolean('active');

        return $data;
    }
}
