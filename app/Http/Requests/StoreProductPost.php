<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductPost extends FormRequest
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
            'p_name' => 'required|max:100'
        ];
    }

    public function messages()
    {
        return [
            'p_name.required' => 'Please enter product name value before record',
            'p_name.max' => 'Product name field must not more than 100 charactor'
        ];
    }

}
