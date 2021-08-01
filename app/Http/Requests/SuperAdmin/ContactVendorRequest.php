<?php

namespace App\Http\Requests\SuperAdmin;

use Illuminate\Foundation\Http\FormRequest;

class ContactVendorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vendor_id' => 'required|numeric',
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return[
            'vendor_id.required' => 'يجب ان تكون مسجل دخول في النظام ',
            'customer_id.exist' => 'هذا التاجر غير موجود',
            'customer_id.numeric' => 'يجب ان تكون القيمة رقم',
            'name.required' => 'يجب ادخال الاسم الاول',
            'name.string' => 'يجب ان يكون الاسم الاول نص',
            'name.max' => 'يجب ان لا يتعدى الاسم الاول عن 100 حرق',

            'email.required' => 'يرجى ادخال البريد الالكتروني',
            'email.email' => 'يرجى التحقق من صيعة البريد الالكتروني المدخل',
            'email.max' => 'هذا الايميل يجب ان لا يتجاوز 100 حانة',
            'message.required' => 'يجب ادخال الرسالة',
            'message.max' => 'الرسالة يجب ان لا تزيد عن 1000 حرف',
        ];

    }
}
