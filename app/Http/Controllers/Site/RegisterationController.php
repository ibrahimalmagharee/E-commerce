<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CustomerLoginRequest;
use App\Http\Requests\Site\CustomerRequest;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterationController extends Controller
{
    public function login()
    {
        $categories = Category::parent()->select('id', 'slug')->with(['categories' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['categories' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->get();

        return view('site.auth.login', compact('categories'));
    }

    public function checkLoginCustomer(CustomerLoginRequest $request)
    {
        if (auth()->guard('customer')->attempt(['mobile' => $request->input('mobile'), 'password' => $request->input('password')])) {

            $notification = array(
                'message' => __('translate-site/index.you_are_logged_in_successfully'),
                'alert-type' => 'success'
            );
            return redirect()->route('home')->with($notification);
        }

        $notification = array(
            'message' => __('translate-site/index.there_is_an_error_in_the_data_please_check'),
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function register()
    {
        $categories = Category::parent()->select('id', 'slug')->with(['categories' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['categories' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->get();

        return view('site.auth.register', compact('categories'));
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
            'message' => __('translate-site/index.you_have_been_added_as_a_customer_in_the_store'),
            'alert-type' => 'success'
        );

        return redirect()->route('customer.login.page')->with($notification);

    }

    public function logout()
    {
        if (!auth('customer')->user()) {
            $notification = array(
                'message' => __('translate-site/index.you_are_not_logged_into_the_system'),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        $guard = $this->getGuard();
        $guard->logout();

        $notification = array(
            'message' => __('translate-site/index.signed_out_successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('customer.login.page')->with($notification);
    }

    private function getGuard()
    {
        return auth('customer');
    }
}
