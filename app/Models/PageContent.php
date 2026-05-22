<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class PageContent extends Model
{
    protected $fillable = [
        'source_domain',
        'section',
        'key',
        'value',
        'type',
    ];

    public static function get(string $domain, string $section, string $key, ?string $default = null): ?string
    {
        $cacheKey = "page_content.{$domain}.{$section}.{$key}";

        return Cache::remember($cacheKey, 3600, function () use ($domain, $section, $key, $default) {
            $content = static::query()
                ->where('source_domain', $domain)
                ->where('section', $section)
                ->where('key', $key)
                ->value('value');

            return $content ?? $default;
        });
    }

    public static function flushCache(string $domain, string $section, string $key): void
    {
        Cache::forget("page_content.{$domain}.{$section}.{$key}");
    }

    protected static function booted(): void
    {
        static::saved(fn (self $model) => static::flushCache(
            $model->source_domain,
            $model->section,
            $model->key
        ));

        static::deleted(fn (self $model) => static::flushCache(
            $model->source_domain,
            $model->section,
            $model->key
        ));
    }
}
