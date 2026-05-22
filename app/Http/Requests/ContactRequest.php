<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $message = $this->sanitizeString($this->input('message'));
        $subject = $this->sanitizeString($this->input('subject'));
        $department = $this->sanitizeString($this->input('department'));
        $desiredDate = $this->sanitizeString($this->input('desired_date'));

        $prefix = [];
        if ($department) {
            $prefix[] = "Department: {$department}";
        }
        if ($desiredDate) {
            $prefix[] = "Desired time and date: {$desiredDate}";
        }
        if ($subject) {
            $prefix[] = "Subject: {$subject}";
        }
        if ($prefix !== []) {
            $message = implode("\n", $prefix)."\n\n".($message ?? '');
        }

        $this->merge([
            'name' => $this->sanitizeString($this->input('name')),
            'email' => $this->sanitizeString($this->input('email')),
            'phone' => $this->sanitizeString($this->input('phone')),
            'message' => $message,
            'source_domain' => $this->sanitizeString($this->input('source_domain')),
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => [
                Rule::requiredIf(fn () => in_array($this->input('source_domain'), ['loan', 'tax'], true)),
                'nullable',
                'string',
                'max:30',
            ],
            'department' => ['nullable', 'string', 'max:255'],
            'desired_date' => ['nullable', 'string', 'max:255'],
            'subject' => [
                Rule::requiredIf(fn () => $this->input('source_domain') === 'tax'),
                'nullable',
                'string',
                'max:255',
            ],
            'message' => ['required', 'string', 'max:5000'],
            'website' => ['nullable', 'max:0'],
            'source_domain' => ['required', Rule::in(['main', 'tax', 'loan'])],
        ];
    }

    public function sanitizedPayload(): array
    {
        return $this->safe()->only(['name', 'email', 'phone', 'message', 'source_domain']);
    }

    protected function sanitizeString(mixed $value): ?string
    {
        if ($value === null) {
            return null;
        }

        $cleaned = strip_tags((string) $value);
        $cleaned = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', $cleaned) ?? '';
        $cleaned = trim($cleaned);

        return $cleaned === '' ? null : $cleaned;
    }
}
