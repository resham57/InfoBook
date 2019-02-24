<?php

namespace App\Http\Requests;

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
            'name'              => 'required',
            'gender'            => 'required',
            'phone'             => 'required',
            'email'             => 'required|email',
            'address'           => 'required',
            'preferredContact'  => 'required',
            'nationality'       => 'required',
            'dob'               => 'required',
            'education'         => 'required'
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
            'name.required' => 'This field is required',
            'gender.required'  => 'This field is required',
        ];
    }
}
