<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'source_domain',
        'title',
        'slug',
        'excerpt',
        'body',
        'image',
        'published',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'published' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function scopeForDomain($query, string $domain)
    {
        return $query->where('source_domain', $domain);
    }

    /** Full URL for display (uploaded file or external CDN link). */
    public function imageUrl(): ?string
    {
        if (! $this->image) {
            return null;
        }

        if (str_starts_with($this->image, 'http://') || str_starts_with($this->image, 'https://')) {
            return $this->image;
        }

        return asset('storage/'.ltrim($this->image, '/'));
    }
}
