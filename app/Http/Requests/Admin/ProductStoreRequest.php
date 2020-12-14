<?php

namespace App\Http\Requests\Admin;

use App\Rules\ProductQty;
use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'SKU' => 'nullable|min:3|max:10',
            'manage_stock' => 'nullable|in:0,1',
            'qty' => [new ProductQty($this->manage_stock)],
            'in_stock' => 'nullable|in:0,1',
        ];
    }
}
