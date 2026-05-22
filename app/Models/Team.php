<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Team extends Model
{
    protected $fillable = [
        'source_domain',
        'slug',
        'title_label',
        'name',
        'role',
        'bio',
        'photo',
        'email',
        'office_phone',
        'phone',
        'sort_order',
        'active',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
            'active' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (Team $team) {
            if (! filled($team->slug) && filled($team->name)) {
                $team->slug = static::uniqueSlug($team->name, $team->source_domain, $team->id);
            }
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeForDomain($query, string $domain)
    {
        return $query->where('source_domain', $domain);
    }

    public function callPhone(): ?string
    {
        return $this->office_phone ?: $this->phone;
    }

    public function mobilePhone(): ?string
    {
        return $this->phone;
    }

    public static function telHref(?string $number): ?string
    {
        if (! filled($number)) {
            return null;
        }

        $digits = preg_replace('/[^0-9+]/', '', $number);

        if ($digits === '') {
            return null;
        }

        if (str_starts_with($digits, '0')) {
            $digits = '+61'.substr($digits, 1);
        }

        return 'tel:'.$digits;
    }

    public function photoUrl(): ?string
    {
        if (! $this->photo) {
            return null;
        }

        if (str_starts_with($this->photo, 'http://') || str_starts_with($this->photo, 'https://')) {
            return $this->photo;
        }

        return asset('storage/'.ltrim($this->photo, '/'));
    }

    /** @return array<int, string> */
    public function bioParagraphs(): array
    {
        if (! filled($this->bio)) {
            return [];
        }

        $parts = preg_split("/\r\n\r\n|\n\n/", trim($this->bio)) ?: [];

        return array_values(array_filter(array_map('trim', $parts)));
    }

    public static function uniqueSlug(string $name, string $domain, ?int $ignoreId = null): string
    {
        $base = Str::slug($name) ?: 'team-member';
        $slug = $base;
        $n = 2;

        while (static::query()
            ->where('source_domain', $domain)
            ->where('slug', $slug)
            ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
            ->exists()) {
            $slug = $base.'-'.$n;
            $n++;
        }

        return $slug;
    }
}
