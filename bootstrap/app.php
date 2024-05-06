<?php

use App\Http\Middleware\GDCheck;
use App\Http\Middleware\HRCheck;
use App\Http\Middleware\RoleDashboardMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('authCheck', [
            RoleDashboardMiddleware::class,
        ]);
        $middleware->appendToGroup('HRCheck', [
            HRCheck::class,
        ]);
        $middleware->appendToGroup('GDCheck', [
            GDCheck::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
