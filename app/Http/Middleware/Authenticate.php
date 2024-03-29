<?php

namespace App\Http\Middleware;

use Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if (Request::is(app() -> getLocale().'/admin*')){
                return route('admin.login.page');

            }
            if (Request::is(app() -> getLocale().'/super-admin*')){
                return route('superAdmin.login.page');

            }
            if (Request::is('/forsa*')){
                return route('vendor.signIn.page');

            }
            if (Request::is(app() -> getLocale().'/*')){
                return route('customer.login.page');

            }
        }
    }
}
