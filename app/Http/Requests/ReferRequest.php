<?php

namespace App\Http\Requests;

use App\Models\Contact;
use Illuminate\Foundation\Http\FormRequest;

class ReferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'your_name' => $this->sanitizeString($this->input('your_name')),
            'your_number' => $this->sanitizeString($this->input('your_number')),
            'their_name' => $this->sanitizeString($this->input('their_name')),
            'their_number' => $this->sanitizeString($this->input('their_number')),
            'message' => $this->sanitizeString($this->input('message')),
        ]);
    }

    public function rules(): array
    {
        return [
            'your_name' => ['required', 'string', 'max:255'],
            'your_number' => ['required', 'string', 'max:30'],
            'their_name' => ['required', 'string', 'max:255'],
            'their_number' => ['required', 'string', 'max:30'],
            'message' => ['required', 'string', 'max:5000'],
            'website' => ['nullable', 'max:0'],
        ];
    }

    public function contactPayload(): array
    {
        $message = implode("\n", [
            'Refer and EARN submission',
            '',
            'Your name: '.$this->input('your_name'),
            'Your number: '.$this->input('your_number'),
            'Their name: '.$this->input('their_name'),
            'Their number: '.$this->input('their_number'),
            '',
            'Message:',
            $this->input('message'),
        ]);

        return [
            'name' => $this->input('your_name'),
            'email' => 'referral@innovativewealth.com.au',
            'phone' => $this->input('your_number'),
            'message' => $message,
            'source_domain' => 'loan',
            'status' => Contact::STATUS_PENDING,
        ];
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
