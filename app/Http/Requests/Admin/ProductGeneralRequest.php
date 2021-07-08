<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductGeneralRequest extends FormRequest
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
            'slug' => 'required|max:100|unique:products,slug,' . $this->product_id,
            'description' => 'required|max:1000',
            'short_description' => 'nullable|max:500',
            'categories' => 'required|array|min:1',
            'categories.*' => 'numeric|exists:categories,id|unique:product_categories,product_id,category_id ' . $this->product_id,
            'tags' => 'required|array',
            'tags.*' => 'numeric|exists:tags,id|unique:product_tags,product_id,tag_id' . $this->product_id,
            'brand_id' => 'required|numeric|exists:brands,id',
        ];
    }
}
