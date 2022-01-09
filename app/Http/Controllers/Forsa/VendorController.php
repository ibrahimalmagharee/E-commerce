<?php

namespace App\Http\Controllers\Forsa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\Http\Requests\SuperAdmin\ContactVendorRequest;
use App\Http\Requests\SuperAdmin\VendorRequest;
use App\Models\ContactVendor;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Stripe;
use DB;

class VendorController extends Controller
{
    public function index ()
    {
        $vendors = Vendor::get();
        return view('forsa.index', compact('vendors'));
    }

    public function signIn ()
    {
        $vendors = Vendor::get();
        return view('forsa.signIn', compact('vendors'));
    }

    public function checkSignInVendor (LoginRequest $request)
    {
        if (auth()->guard('vendor')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){

            $notification = array(
                'message' => 'تم تسجيل دخولك بنجاح',
                'alert-type' => 'success'
            );
            return redirect()->route('forsa.index')->with($notification);
        }

        $notification = array(
            'message' => 'هناك خطأ بالبيانات يرجى التحقق',
            'alert-type' => 'error'
        );
        return redirect() -> back()->with($notification);
    }

    public function logout ()
    {
        $guard = $this->getGuard();
        $guard->logout();
        $notification = array(
            'message' => 'تم تسجيل خروجك بنجاح',
            'alert-type' => 'success'
        );

        return redirect() ->route('forsa.index')->with($notification);
    }

    private function getGuard ()
    {
        return auth('vendor');
    }

    public function signUp ()
    {
        $vendors = Vendor::get();
        return view('forsa.signUp', compact('vendors'));
    }

    public function signUpVendor (VendorRequest $request)
    {
        DB::beginTransaction();
        $vendor = Vendor::create([
            'name' => $request->name,
            'domain' => $request->domain,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),


        ]);

        $vendor->save();

        DB::commit();

        $notification = array(
            'message' => 'تم اضافتك كتاجر بنجاح',
            'alert-type' => 'success'
        );

        return redirect()->route('vendor.signIn.page')->with($notification);
    }

    public function subscription ()
    {
        if (!auth('vendor')->user()) {
            $notification = array(
                'message' => 'انت غير مسجل دخول في النظام',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        $vendors = Vendor::get();
        return view('forsa.payment', compact('vendors'));
    }

    public function payment(Request $request)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Stripe\Charge::create([
            "amount" => $request->amount,
            "currency" => $request->currency,
            "source" => $request->source,
            "description" => $request->description,
        ]);

        $charge_id = $charge['id'];

        if (!$charge_id) {
            return response()->json([
                'status' => false,
                'msg' => 'فشلت عملية الدفع يرجى التحقق من البطاقة'
            ]);
        } else {
            DB::beginTransaction();
            $vendor_id = auth('vendor')->user()->id;

            $vendor = Vendor::where('id', $vendor_id)->update([
               'subscription' => 'مشترك',
               'subscription_type' => $request->subscription_type,
                'subscription_amount' => $request->amount
            ]);

            DB::commit();


            return response()->json([
                'status' => true,
                'url' => route('home'),
                'msg' => 'تم دفع اشتراكك بنجاح'
            ]);


        }



    }

    public function contact(ContactVendorRequest $request)
    {
        DB::beginTransaction();
        $contact = ContactVendor::create([
            'vendor_id' => $request->vendor_id,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        $contact->save();

        DB::commit();

        $notification = array(
            'message' => 'تم ارسال الرسالة بنجاح',
            'alert-type' => 'success'
        );

        return redirect()->route('forsa.index')->with($notification);
    }

}
