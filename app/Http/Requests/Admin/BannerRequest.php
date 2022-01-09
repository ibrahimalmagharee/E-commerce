<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'category_id' => 'required||numeric|exists:categories,id',
            'photo' => 'required_without:id|mimes:jpg,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => __('translate-admin/banners.category_id.required'),
            'category_id.numeric' => __('translate-admin/banners.category_id.numeric'),
            'category_id.exists' => __('translate-admin/banners.category_id.exists'),
            'photo.required_without' => __('translate-admin/banners.photo.required_without'),
            'photo.mimes' => __('translate-admin/banners.photo.mimes'),
        ];

    }
}
