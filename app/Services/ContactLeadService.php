<?php

namespace App\Services;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class ContactLeadService
{
    public function __construct(
        protected LeadMailService $mailService
    ) {}

    public function getStats(): array
    {
        $today = Carbon::today();

        return [
            'total' => Contact::count(),
            'pending' => Contact::pending()->count(),
            'approved' => Contact::approved()->count(),
            'today' => Contact::whereDate('created_at', $today)->count(),
        ];
    }

    public function paginateLeads(array $filters): LengthAwarePaginator
    {
        return $this->buildFilteredQuery($filters)
            ->paginate(15)
            ->withQueryString();
    }

    public function buildFilteredQuery(array $filters): Builder
    {
        $query = Contact::query()->with('approver');

        if (! empty($filters['status']) && $filters['status'] !== 'all') {
            $query->where('status', $filters['status']);
        }

        if (! empty($filters['search'])) {
            $search = '%'.$filters['search'].'%';
            $query->where(function (Builder $q) use ($search) {
                $q->where('name', 'like', $search)
                    ->orWhere('email', 'like', $search)
                    ->orWhere('source_domain', 'like', $search);
            });
        }

        return match ($filters['sort'] ?? 'newest') {
            'oldest' => $query->oldest(),
            'status' => $query->orderBy('status')->latest(),
            default => $query->latest(),
        };
    }

    public function approve(Contact $contact, User $admin): array
    {
        if ($contact->isApproved()) {
            return [
                'success' => false,
                'message' => 'This lead has already been approved.',
                'type' => 'error',
            ];
        }

        try {
            $approved = DB::transaction(function () use ($contact, $admin) {
                $updated = Contact::query()
                    ->whereKey($contact->id)
                    ->where('status', Contact::STATUS_PENDING)
                    ->update([
                        'status' => Contact::STATUS_APPROVED,
                        'approved_at' => now(),
                        'approved_by' => $admin->id,
                    ]);

                return $updated > 0;
            });

            if (! $approved) {
                return [
                    'success' => false,
                    'message' => 'This lead could not be approved. It may have already been processed.',
                    'type' => 'error',
                ];
            }

            $contact->refresh()->load('approver');

            Log::info('Lead approved', [
                'contact_id' => $contact->id,
                'approved_by' => $admin->id,
                'approved_by_email' => $admin->email,
                'approved_at' => $contact->approved_at?->toIso8601String(),
                'source_domain' => $contact->source_domain,
            ]);

            $emailWarning = null;

            try {
                $this->mailService->sendUserApprovalNotification($contact);
            } catch (Throwable $e) {
                Log::error('Failed to send user approval email', [
                    'contact_id' => $contact->id,
                    'error' => $e->getMessage(),
                ]);

                $emailWarning = 'Lead approved, but the confirmation email could not be sent. Check mail settings in .env or storage/logs/laravel.log.';
            }

            $successMessage = $emailWarning
                ?? 'Lead approved. A confirmation email was sent to '.$contact->email.'.';

            return [
                'success' => true,
                'message' => $successMessage,
                'type' => $emailWarning ? 'warning' : 'success',
                'contact' => $contact,
            ];
        } catch (Throwable $e) {
            Log::error('Lead approval failed', [
                'contact_id' => $contact->id,
                'admin_id' => $admin->id,
                'error' => $e->getMessage(),
            ]);

            return [
                'success' => false,
                'message' => 'An error occurred while approving this lead. Please try again.',
                'type' => 'error',
            ];
        }
    }

    public function delete(Contact $contact): array
    {
        try {
            $contactId = $contact->id;
            $contact->delete();

            Log::info('Lead deleted', ['contact_id' => $contactId]);

            return [
                'success' => true,
                'message' => 'Lead Deleted',
                'type' => 'success',
            ];
        } catch (Throwable $e) {
            Log::error('Lead deletion failed', [
                'contact_id' => $contact->id,
                'error' => $e->getMessage(),
            ]);

            return [
                'success' => false,
                'message' => 'Unable to delete this lead. Please try again.',
                'type' => 'error',
            ];
        }
    }
}
