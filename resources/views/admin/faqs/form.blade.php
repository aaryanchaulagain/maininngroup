@extends('layouts.admin')
@section('page-title', $faq->exists ? 'Edit FAQ' : 'New FAQ')
@section('content')
<form method="POST" action="{{ $faq->exists ? route('admin.faqs.update', $faq) : route('admin.faqs.store') }}" class="max-w-2xl space-y-4 rounded-xl border bg-white p-6">
    @csrf @if($faq->exists) @method('PUT') @endif
    <p><label class="text-sm font-medium">Domain</label><select name="source_domain" class="mt-1 block w-full rounded border px-3 py-2">@foreach(['loan','tax','main'] as $d)<option value="{{ $d }}" @selected(old('source_domain',$faq->source_domain)===$d)>{{ $d }}</option>@endforeach</select></p>
    <p><label class="text-sm font-medium">Question</label><input name="question" value="{{ old('question',$faq->question) }}" required class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p><label class="text-sm font-medium">Answer</label><textarea name="answer" rows="5" required class="mt-1 block w-full rounded border px-3 py-2">{{ old('answer',$faq->answer) }}</textarea></p>
    <p><label class="text-sm font-medium">Sort order</label><input type="number" name="sort_order" value="{{ old('sort_order',$faq->sort_order) }}" class="mt-1 block w-full rounded border px-3 py-2"></p>
    <p><label class="flex gap-2 text-sm"><input type="checkbox" name="active" value="1" @checked(old('active',$faq->active ?? true))> Active</label></p>
    <button class="btn-primary bg-tax-teal text-white">Save</button>
</form>
@endsection
