<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|max:200',
            'mobile' => 'required|max:20|unique:customers,mobile,'. $this -> id,
            'password' => 'required|confirmed|min:4',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'يجب ادخال الاسم',
            'name.max' => 'يجب ان لا يتجاوز الاسم 200 حرف',
            'mobile.required' => 'يجب ادخال رقم الهاتف',
            'mobile.max' => 'يجب ان لا يتجاوز رقم الهاتف عن 20 رقم',
            'mobile.unique' => 'هذا الرقم مسجل من قبل',
            'password.required' => 'يجب ادخال كلمة المرور',
            'password.confirmed' => 'كلمة المرور غير متطابقة',
            'password.min' => 'يجب ان تكون كلمة المرور اكتر من اربع احرف',
        ];

    }
}
