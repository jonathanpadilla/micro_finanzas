<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
{
    protected $redirectRoute = 'category_index';

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
            'movement_type_id' => 'required|numeric',
            'name' => 'required'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'user_id' => 'User id',
            'movement_type_id' => 'Movement type id',
            'name' => 'Name'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'user_id.required' => ':attribute is required',
            'user_id.numeric' => ':attribute is not a numeric',

            'movement_type_id.required'  => ':attribute is required',
            'movement_type_id.numeric'  => ':attribute is not a numeric',

            'name.required'  => ':attribute is required',
        ];
    }
}
