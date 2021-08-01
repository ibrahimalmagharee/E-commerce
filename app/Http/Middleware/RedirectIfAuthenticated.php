<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if ($guard == 'admin'){
                return redirect(RouteServiceProvider::ADMIN);

            } elseif ($guard == 'superAdmin') {
                return redirect(RouteServiceProvider::SUPERADMIN);

            } elseif ($guard == 'vendor') {
                return redirect(RouteServiceProvider::VENDOR);
            }

            else
                return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
