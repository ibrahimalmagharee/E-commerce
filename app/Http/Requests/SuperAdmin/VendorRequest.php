<?php

namespace App\Http\Requests\SuperAdmin;

use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
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
            'name' => 'required|max:150|min:1',
            'domain' => 'required|max:150|min:1',
            'database' => 'nullable|max:150|min:1',
            'email' => 'required|email|max:100|unique:landlord.tenants,email,'. $this -> id,
            'mobile' => 'required|digits:10|unique:landlord.tenants,mobile,'. $this -> id,
            'password' => 'required_without:id|min:1|max:50',
        ];
    }
}
