<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'images' => 'required_without:id|min:1',
            'images.*' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'photo.required_without' => __('translate-admin/slider.photo.required_without'),
            'photo.mimes' => __('translate-admin/slider.photo.mimes'),
        ];

    }
}
