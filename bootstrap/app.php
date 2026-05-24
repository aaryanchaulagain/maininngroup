<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            $registerAuthAndAdmin = function () {
                Route::middleware('web')->group(base_path('routes/auth.php'));
                Route::middleware('web')->group(base_path('routes/admin.php'));
            };

            if (domain_routing_enabled()) {
                Route::middleware('web')
                    ->domain(config('domains.main'))
                    ->group(function () {
                        require base_path('routes/auth.php');
                    });

                Route::middleware('web')
                    ->domain(config('domains.main'))
                    ->group(base_path('routes/admin.php'));
            } else {
                $registerAuthAndAdmin();
            }
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectGuestsTo('/login');
        $middleware->redirectUsersTo('/admin');
        $middleware->alias([
            'admin.site' => \App\Http\Middleware\AssignAdminSite::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
