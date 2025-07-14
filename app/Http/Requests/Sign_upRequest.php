<?php

namespace App\Http\Requests;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory as ValidationFactory;
use DB;

class Sign_upRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "name"                => "required",
            "phone_number"        => "required",
            "email"               => "required|email",
            "password"            => "required",
            "term_and_condition"  => "required",
        ];
    }



    public function messages()
    {
        return [
            'name.required'                   => trans("Name is must be required"),
            'phone_number.required'           => trans("Phone number must be required"),
            'email.required'                  => trans("Email is must be required"),
            'email.email'                     => trans("Email must be a email"),
            'password.required'               => trans("password must be required"),
            'term_and_condition.required'     => trans("Term and condition must be required"),
        ];
    }

}
