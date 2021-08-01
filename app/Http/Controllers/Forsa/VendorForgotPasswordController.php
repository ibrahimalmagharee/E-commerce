<?php

namespace App\Http\Controllers\Forsa;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class VendorForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        $vendors = Vendor::get();
        return view('forsa.email', compact('vendors'));
    }

    public function broker()
    {
        return Password::broker('vendors');
    }

    protected function validateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:vendors,email'],
            [
                'email.required' => 'يرجى ادخال الايميل للتحقق',
                'email.email' => 'صيغة الايميل المدخل غير صحيحة',
                'email.exists' => 'هذا الايميل غير مسجل به. يرجى التحقق من الايميل المدخل',
            ]);

    }
}
