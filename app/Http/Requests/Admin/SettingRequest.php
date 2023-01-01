<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SettingRequest extends FormRequest
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
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws HttpResponseException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors()->first(), 400));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'address_en' => ['required' , 'string' , 'max:255'],
            'address_ar' => ['required' , 'string' , 'max:255'],
            'email' => ['required' , 'string' , 'max:225' , 'email'],
            'phone' => ['required' , 'string'],
            'map' => ['required']
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Email',
            'phone' => 'Phone',
            'address_en' => 'Address (EN)',
            'address_ar' => 'Address (AR)',
            'map' => 'Map'
        ];
    }
}
