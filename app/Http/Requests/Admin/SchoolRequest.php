<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SchoolRequest extends FormRequest
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
        // dd($this->id);
        return [
            'logo' => $this->isMethod('post') ? ['required' , 'image' , 'mimes:png,jpg,jpeg' ,'max:2048'] : ['image' , 'mimes:png,jpg,jpeg' ,'max:2048'],
            'name_en' => ['required' , 'string' , 'max:255'],
            'name_ar' => ['required' , 'string' , 'max:255'],
            'email' => ['required' , 'string' , 'max:255'],
            'phone' => ['required' , 'string'],
            'description_en' => ['required'],
            'description_ar' => ['required']
        ];
    }

    public function attributes()
    {
        return [
            'logo' => 'School logo',
            'name_en' => 'School name (EN)',
            'name_ar' => 'School name (AR)',
            'email' => 'Contact email',
            'phone' => 'Contact phone',
            'description_en' => 'School brief (EN)',
            'description_ar' => 'School brief (AR)'
        ];
    }
}
