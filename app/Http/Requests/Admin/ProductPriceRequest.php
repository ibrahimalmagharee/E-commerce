<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductPriceRequest extends FormRequest
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
            'price' => 'nullable|min:0|numeric',
            'special_price' => 'nullable|min:0|numeric',
            'special_price_type' => 'nullable|required_with:special_price|in:fixed,percent',
            'special_price_start' => 'nullable|required_with:special_price|date_format:Y-m-d',
            'special_price_end' => 'nullable|required_with:special_price|date_format:Y-m-d',
        ];
    }
}
