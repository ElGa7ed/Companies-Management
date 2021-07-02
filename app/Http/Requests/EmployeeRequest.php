<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email'  => 'email|unique:employees,email,'.$this -> id,
            'phone' =>'max:11|unique:employees,phone,'.$this -> id,
        ];

        
    }
    public function messages()
    {
        return [
            'first_name.required' => 'الاسم الاول مطلوب.',
            'last_name.required' => 'الاسم الاخير مطلوب.',

            'email.email' => 'ادخل عنوان بريد إلكتروني صالح.',

            'phone.unique' => 'رقم الهاتف مستخدم من قبل ',
        ];
    }
}
