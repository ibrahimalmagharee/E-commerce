<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CustomerRequest;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        if (! auth('customer')->user()){
            $notification = array(
                'message' => 'انت غير مسجل دخول في النظام',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $customer = auth('customer')->user();
        $categories = Category::parent()->select('id', 'slug')->with(['categories' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['categories' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->get();

        $cart_products = auth('customer')->user()
            ->cartProduct()
            ->get();

        return view('site.profile.editProfile', compact('customer', 'categories', 'cart_products'));
    }

    public function update(CustomerRequest $request)
    {
        $customer = Customer::find($request->id);
        $customer ->where('id', $request->id)->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
        ]);

        $customer->save();


        $notification = array(
            'message' => 'تم تحديث الملف الشخصي بنجاح',
            'alert-type' => 'success'
        );

        return redirect()->route('home')->with($notification);
    }


}
