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
            'name.required' => __('translate-site/index.name.required'),
            'name.max' => __('translate-site/index.name.max'),
            'mobile.required' => __('translate-site/index.mobile.required'),
            'mobile.max' =>__('translate-site/index.mobile.max'),
            'mobile.unique' => __('translate-site/index.mobile.unique'),
            'password.required' => __('translate-site/index.password.required'),
            'password.confirmed' => __('translate-site/index.password.confirmed'),
            'password.min' => __('translate-site/index.password.min'),
        ];

    }
}
