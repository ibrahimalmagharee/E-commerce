<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'logo' => 'required_without:id|mimes:jpg,jpeg,png',
            'name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'logo.required_without' => __('translate-admin/brand.logo.required_without'),
            'logo.mimes' => __('translate-admin/brand.logo.mimes'),
            'name.required' => __('translate-admin/brand.name.required'),
            'name.unique' => __('translate-admin/brand.name.unique'),
        ];
    }
}
