<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ShippingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use DB;

class SettingsController extends Controller
{
    public function editShippingMethod($type)
    {
        if ($type === 'free')
            $shipping_method = Setting::where('key', 'free_shipping_label')->first();

        elseif($type === 'inner')
            $shipping_method = Setting::where('key', 'local_label')->first();

        elseif($type === 'outer')
            $shipping_method = Setting::where('key', 'outer_label')->first();

        else
            $shipping_method = Setting::where('key', 'free_shipping_label')->first();


        return view('admin.settings.shipping.edit', compact('shipping_method'));


    }

    public function updateShippingMethod(ShippingRequest $request, $id)
    {
        try {
            $shipping_method = Setting::find($id);
            DB::beginTransaction();
            $shipping_method ->update(['plain_value' => $request->plain_value]);
            $shipping_method ->translateOrNew() -> value = $request->value;
            $shipping_method -> save();
            DB::commit();

            return redirect() -> back() -> with(['success' => __('translate-admin/shipping.success')]);

        }catch (\Exception $ex){
            DB::rollBack();
            return redirect() -> back() -> with(['error' => __('translate-admin/shipping.error')]);
        }
    }
}
