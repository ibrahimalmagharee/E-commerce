<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CustomerLoginRequest;
use App\Http\Requests\Site\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterationController extends Controller
{
    public function login()
    {
        return view('site.auth.login');
    }

    public function checkLoginCustomer(CustomerLoginRequest $request)
    {
        if (auth()->guard('customer')->attempt(['mobile' => $request->input('mobile'), 'password' => $request->input('password')])) {

            $notification = array(
                'message' => 'تم تسجيل دخولك بنجاح',
                'alert-type' => 'success'
            );
            return redirect()->route('home')->with($notification);
        }

        $notification = array(
            'message' => 'هناك خطأ بالبيانات يرجى التحقق',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function register()
    {
        return view('site.auth.register');
    }

    public function registerCustomer(CustomerRequest $request)
    {
        $customer = Customer::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
        ]);

        $customer->save();


        $notification = array(
            'message' => 'تم اضافتك كعميل في االمتجر',
            'alert-type' => 'success'
        );

        return redirect()->route('customer.login.page')->with($notification);

    }

    public function logout()
    {
        if (!auth('customer')->user()) {
            $notification = array(
                'message' => 'انت غير مسجل دخول في النظام',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        $guard = $this->getGuard();
        $guard->logout();

        $notification = array(
            'message' => 'تم تسجيل الخروج بنجاح',
            'alert-type' => 'success'
        );

        return redirect()->route('customer.login.page')->with($notification);
    }

    private function getGuard()
    {
        return auth('customer');
    }
}
