<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    protected $fillable = [
        'source_domain',
        'name',
        'slug',
        'config',
        'description',
        'active',
    ];

    protected function casts(): array
    {
        return [
            'config' => 'array',
            'active' => 'boolean',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeForDomain($query, string $domain)
    {
        return $query->where('source_domain', $domain);
    }
}
