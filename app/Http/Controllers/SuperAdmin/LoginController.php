<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('superAdmin.auth.login');
    }

    public function checkLogin(LoginRequest $request)
    {
        if (auth()->guard('superAdmin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            $notification = array(
                'message' => 'تم تسجيل دخولك بنجاح',
                'alert-type' => 'success'
            );
            return redirect()->route('superAdmin.dashboard')->with($notification);
        }

        $notification = array(
            'message' => 'هناك خطأ بالبيانات يرجى التحقق',
            'alert-type' => 'error'
        );
        return redirect() -> back()->with($notification);
    }

    public function logout()
    {
        $guard = $this->getGuard();
        $guard->logout();

        return redirect() ->route('superAdmin.login.page');
    }

    private function getGuard()
    {
        return auth('superAdmin');
    }
}
