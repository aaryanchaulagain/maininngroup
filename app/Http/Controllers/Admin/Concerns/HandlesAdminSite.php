<?php

namespace App\Http\Controllers\Admin\Concerns;

use App\Support\AdminSite;
use Illuminate\Database\Eloquent\Model;

trait HandlesAdminSite
{
    protected function adminSiteKey(): string
    {
        return admin_site_key() ?? 'main';
    }

    protected function adminSite(): AdminSite
    {
        return AdminSite::from($this->adminSiteKey());
    }

    protected function assertModelForSite(Model $model, string $column = 'source_domain'): void
    {
        if (! isset($model->{$column})) {
            return;
        }

        abort_unless($model->{$column} === $this->adminSiteKey(), 404);
    }

    protected function redirectToAdmin(string $routeSuffix, array $params = [], string $flashKey = 'success', ?string $message = null)
    {
        $response = redirect()->to(admin_route($routeSuffix, $params));

        if ($message !== null) {
            $response->with($flashKey, $message);
        }

        return $response;
    }
}
