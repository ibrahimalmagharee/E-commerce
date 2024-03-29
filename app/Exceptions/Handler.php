<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is(app() -> getLocale().'/admin') || $request->is(app() -> getLocale().'/admin/*')) {
            return redirect()->guest('admin/login/');
        }

        if ($request->is(app() -> getLocale().'/super-admin') || $request->is(app() -> getLocale().'/super-admin/*')) {
            return redirect()->guest('super-admin/login-super-admin/');
        }

        if ($request->is('/forsa') || $request->is('/forsa/*')) {
            return redirect()->guest('forsa/sign-in/');
        }

        if ($request->is(app() -> getLocale().'/customer') || $request->is(app() -> getLocale().'/customer/*')) {
            return redirect()->guest('customer/login/');
        }
        //return redirect()->guest(route('login'));
    }
}
