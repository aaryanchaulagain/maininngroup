<?php

namespace App\Http\Middleware;

use App\Support\AdminSite;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class AssignAdminSite
{
    public function handle(Request $request, Closure $next, string $site): Response
    {
        $request->attributes->set('admin_site', $site);

        $adminSite = AdminSite::from($site);
        View::share('adminSite', $adminSite);

        return $next($request);
    }
}
