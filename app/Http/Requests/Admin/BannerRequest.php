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
            'category_id.required' => 'يجب اختيار القسم',
            'category_id.numeric' => 'يجب ان تكون قيمة القسم رقم',
            'category_id.exists' => 'هذا القسم غير موجود',
            'photo.required_without' => 'يجب ادخال الصورة',
            'photo.mimes' => 'يجب ان تكون امتداد الصورة jpg,jpeg,png',
        ];

    }
}
