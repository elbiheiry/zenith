<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class WorkRequest extends FormRequest
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
            'title_en' => ['required' , 'string' , 'max:255'],
            'title_ar' => ['required' , 'string' , 'max:255'],
            'subtitle_en' => ['required' , 'string' , 'max:255'],
            'subtitle_ar' => ['required' , 'string' , 'max:255']
        ];
    }

    public function attributes()
    {
        return [
            'title_en' => 'Title (EN)',
            'title_ar' => 'Title (AR)',
            'subtitle_en' => 'Subtitle (EN)',
            'subtitle_ar' => 'Subtitle (AR)',
        ];
    }
}
