<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectPost extends FormRequest
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
            'project_name' => 'required',
            'customer' => 'required',
            'price' => 'required|numeric',
            'product_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'project_name.required' => 'Field projectname is required',
            'customer.required' => 'Field customer is required',
            'price.required' => 'Field price is required',
            'price.numeric' => 'Field price must be a number only',
            'product_id.required' => 'Field product_id is required',
            'product_id.numeric' => 'Field products_id must be a number only',
        ];
    }

}
