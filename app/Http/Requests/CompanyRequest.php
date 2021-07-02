<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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

            'name' => 'required|string|max:100',
            'email'  => 'email|unique:employees,email,'.$this -> id,
            'logo' => 'required_without:id|mimes:jpg,jpeg,png|dimensions:min_width=100,min_height=100',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'الاسم مطلوب.',
            'email.email' => 'ادخل عنوان بريد إلكتروني صالح.',
            'logo.required_without' => 'الصورة مطلوية  بأبعاد على الاقل 100*100.'
        ];
    }
}
