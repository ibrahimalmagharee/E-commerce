<?php

namespace App\Http\Requests\Admin;

use App\Http\Enumeration\CategoryType;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|max:100',
            'photo' => 'required_without:id|mimes:jpg,jpeg,png',
            'type' => 'required|in:'. CategoryType::mainCategory . ',' . CategoryType::subCategory,
            //'parent_id' => 'required|exist:categories,id',
            'slug' => 'required|max:100|unique:categories,slug,' . $this->id
        ];


    }

    public function messages()
    {
        return [
            'name.required' => __('translate-admin/category.name.required'),
            'photo.required_without' => __('translate-admin/category.photo.required_without'),
            'photo.mimes' => __('translate-admin/category.photo.mimes'),
            'parent_id.required' => __('translate-admin/category.parent_id.required'),
            'parent_id.exist' => __('translate-admin/category.parent_id.exist'),
            'slug.required' => __('translate-admin/category.slug.required'),
            'slug.unique' => __('translate-admin/category.slug.unique'),

        ];

    }
}
