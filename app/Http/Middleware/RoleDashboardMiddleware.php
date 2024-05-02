<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleDashboardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            $role = auth()->user()->role->special;

            switch ($role) {
                case 'hr':
                    return redirect()->route('hr.index');

                case 'gamedesigner':
                    return redirect()->route('gd.index');

                default:
                    return redirect()->route('login.index');
            }
        }

        return $next($request);
    }
}
