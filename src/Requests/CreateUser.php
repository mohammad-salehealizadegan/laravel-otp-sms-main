<?php

namespace Harirsoft\OtpAuth\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'mobile' => 'required|max:11|min:11',
        ];
    }
    public function messages()
    {
        return [
            'mobile.required' => 'user mobile is required',
            'mobile.max' => 'mobile number is not valid',
            'mobile.min' => 'mobile number is not valid',
        ];
    }
}
