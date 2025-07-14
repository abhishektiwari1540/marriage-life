<?php

namespace App\Http\Requests;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory as ValidationFactory;
use DB;
class UserProfileEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
             "gender"      => "required",
             "city"        => "required",
             "dob"         => "required",
             "height"      => "required",
             "weight"      => "required",
             "job_type"    => "required",
             "company_name" => "required",
             "salary"     => "required",
             "job_ex"      => "required",
             "hobbies"     => "required",
        ];
    }


    public function messages()
    {
        return [
            'gender.required'                  => trans("Gender is must be required"),
            'city.required'                     => trans("City must be a email"),
            'dob.required'                      => trans("Date of birth must be required"),
            'height.required'                  => trans("Height is must be required"),
            'weight.required'                     => trans("Weight must be a email"),
            'job_type.required'                      => trans("Job Type must be required"),
            'company_name.required'                      => trans("Company Name must be required"),
            'salary.required'                  => trans("Sallary is must be required"),
            'job_ex.required'                     => trans("Job Expirence be a email"),
            'hobbies.required'                      => trans("hobbies must be required"),
        ];
    }
}
