New website enquiry — {{ $contact->sourceDomainLabel() }}

Name: {{ $contact->name }}
Email: {{ $contact->email }}
Phone: {{ $contact->phone ?: '—' }}
Source: {{ $contact->sourceDomainLabel() }}
Submitted: {{ $contact->created_at->timezone(config('app.timezone'))->format('d M Y, g:i A T') }}

Message:
{{ $contact->message }}

View in admin: {{ route('admin.contacts.show', $contact) }}
