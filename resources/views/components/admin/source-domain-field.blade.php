@props([
    'value' => '',
    'locked' => false,
])

@if ($locked)
    <input type="hidden" name="source_domain" value="{{ $value }}">
    <p class="rounded-lg border border-slate-200 bg-slate-50 px-3 py-2 text-sm text-slate-600">
        <span class="font-medium text-inn-navy">Site:</span> {{ ucfirst($value) }}
        <span class="text-slate-400">(fixed for this section)</span>
    </p>
@else
    <p>
        <label class="text-sm font-medium">Domain</label>
        <select name="source_domain" class="mt-1 block w-full rounded border px-3 py-2">
            @foreach (['loan', 'tax', 'main', 'advisory'] as $d)
                <option value="{{ $d }}" @selected(old('source_domain', $value) === $d)>{{ $d }}</option>
            @endforeach
        </select>
    </p>
@endif
