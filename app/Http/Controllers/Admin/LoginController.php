<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function checkLogin(LoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me)){
            return redirect()->route('admin.dashboard');
        }

        return redirect() -> back()->with(['error' => 'هناك خطأ بالبيانات يرجى التحقق']);
    }

    public function logout()
    {
        $guard = $this->getGuard();
        $guard->logout();

        return redirect() ->route('admin.login.page');
    }

    private function getGuard()
    {
        return auth('admin');
    }
}
