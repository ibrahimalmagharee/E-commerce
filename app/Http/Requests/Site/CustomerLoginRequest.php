<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class CustomerLoginRequest extends FormRequest
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
            'mobile' => 'required',
            'password' =>'required'
        ];
    }

    public function messages()
    {
        return[
            'mobile.required' => 'يجب ادخال رقم الهاتف',
            'password.required' => 'يجب ادخال كلمة المرور'
        ];

    }
}
