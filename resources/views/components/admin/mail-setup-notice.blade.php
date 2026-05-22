@props(['issues' => [], 'deliverabilityTips' => []])

@if (count($issues) > 0)
    <div class="mb-6 rounded-xl border border-amber-200 bg-amber-50 p-4 text-sm text-amber-950">
        <p class="font-semibold">Email notifications are not fully configured</p>
        <p class="mt-1 text-amber-900">New contact forms and client approval emails will not reach real inboxes until you fix the items below.</p>
        <ul class="mt-3 list-inside list-disc space-y-1">
            @foreach ($issues as $issue)
                <li>{{ $issue }}</li>
            @endforeach
        </ul>
        <p class="mt-3 text-xs text-amber-800">
            After updating <code class="rounded bg-amber-100 px-1">.env</code>, run
            <code class="rounded bg-amber-100 px-1">php artisan config:clear</code>
            then
            <code class="rounded bg-amber-100 px-1">php artisan inn:test-mail</code>
        </p>
    </div>
@else
    <div class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-900">
        <strong>Email notifications are on.</strong>
        You receive an email when someone submits a contact form.
        When you approve a lead, the client receives a confirmation at their email address.
        (Inbox: <span class="font-mono text-xs">{{ config('mail.admin_notification_address') }}</span>)
    </div>
@endif

@if (count($deliverabilityTips) > 0)
    <div class="mb-6 rounded-xl border border-sky-200 bg-sky-50 p-4 text-sm text-sky-950">
        <p class="font-semibold">Avoid client emails landing in spam</p>
        <ul class="mt-2 list-inside list-disc space-y-1">
            @foreach ($deliverabilityTips as $tip)
                <li>{{ $tip }}</li>
            @endforeach
        </ul>
    </div>
@endif
