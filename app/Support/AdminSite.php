<?php

namespace App\Support;

class AdminSite
{
    public function __construct(
        public readonly string $key,
        public readonly array $config,
    ) {}

    public static function from(string $key): self
    {
        $config = config("admin_sites.{$key}");

        if (! is_array($config)) {
            abort(404);
        }

        return new self($key, $config);
    }

    public static function current(): ?self
    {
        $key = admin_site_key();

        return $key ? self::from($key) : null;
    }

    public function label(): string
    {
        return $this->config['label'];
    }

    public function short(): string
    {
        return $this->config['short'];
    }

    public function domainKey(): string
    {
        return $this->config['domain_key'];
    }

    public function publicUrl(): string
    {
        $url = $this->config['public_url'] ?? null;

        return is_callable($url) ? (string) $url() : domain_url($this->domainKey(), '/');
    }

    public function route(string $name, mixed $parameters = [], bool $absolute = true): string
    {
        return admin_route($name, $parameters, $absolute);
    }

    public function routeIsActive(string $routeSuffix): bool
    {
        $prefix = $this->key === 'advisory'
            ? 'admin.advisory.'
            : "admin.{$this->key}.";

        if (str_starts_with($routeSuffix, 'advisory.')) {
            return request()->routeIs('admin.'.$routeSuffix.'*');
        }

        return request()->routeIs($prefix.$routeSuffix.'*');
    }

    /** @return list<array{route: string, label: string, icon: string}> */
    public function nav(): array
    {
        return $this->config['nav'] ?? [];
    }
}
