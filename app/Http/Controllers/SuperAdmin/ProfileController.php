<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(){
        $superAdmin = SuperAdmin::find(auth('superAdmin')->user()->id);
        return view('superAdmin.profile.edit', compact('superAdmin'));
    }

    public function update(ProfileRequest $request)
    {
        try {

            $superAdmin = SuperAdmin::find(auth('superAdmin')->user()->id);

            if ($request -> filled('password')){
                $request -> merge(['password' => bcrypt($request -> password)]);
            }
            unset($request['id'], $request['password_confirmation']);

            if ($request->password == null){
                $superAdmin -> update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);

            }else{
                $superAdmin -> update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,
                ]);

            }

            $notification = array(
                'message' => 'تم تحديث الملف الشخصي بنجاح',
                'alert-type' => 'success'
            );

            return redirect()->route('superAdmin.dashboard')->with($notification);

        }catch (\Exception $ex){
            $notification = array(
                'message' => 'هناك خطأ ما يرجى المحاولة مرة أخرى',
                'alert-type' => 'error'
            );
            return redirect() -> back() -> with($notification);

        }
    }
}
