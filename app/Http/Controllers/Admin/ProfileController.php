<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileRequest;
use App\Models\Admin;

class ProfileController extends Controller
{
    public function edit(){
        $admin = Admin::find(auth('admin')->user()->id);
        return view('admin.profile.edit', compact('admin'));
    }

    public function update(ProfileRequest $request)
    {
        try {

            $admin = Admin::find(auth('admin')->user()->id);

            if ($request -> filled('password')){
                $request -> merge(['password' => bcrypt($request -> password)]);
            }
            unset($request['id'], $request['password_confirmation']);

            if ($request->password == null){
                $admin -> update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);

            }else{
                $admin -> update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,
                ]);

            }


            return redirect() -> back() -> with(['success' => __('translate-admin/editProfile.success')]);

        }catch (\Exception $ex){
            return redirect() -> back() -> with(['error' => __('translate-admin/editProfile.error')]);

        }
    }
}
