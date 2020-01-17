<?php
// php artisan make:request RuleStoreRequest

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleStoreRequest extends FormRequest
{
    protected $redirectRoute = 'rules_index';

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
            'user_id' => 'required|numeric',
            'primary_expenses' => 'required|numeric',
            'secundary_expenses' => 'required|numeric',
            'saving' => 'required|numeric',
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
            'primary_expenses' => 'Primary expenses',
            'secundary_expenses' => 'Secundary expenses',
            'saving' => 'Saving',
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

            'primary_expenses.required'  => ':attribute is required',
            'primary_expenses.numeric'  => ':attribute is not a numeric',

            'secundary_expenses.required'  => ':attribute is required',
            'secundary_expenses.numeric'  => ':attribute is not a numeric',

            'saving.required'  => ':attribute is required',
            'saving.numeric'  => ':attribute is not a numeric',
        ];
    }
}
