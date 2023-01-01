<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class HomeRequest extends FormRequest
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
            'image' => ['image' , 'max:2048', 'mimes:png,jpg,jpeg'],
            'title_en' => ['required' , 'string' , 'max:255'],
            'title_ar' => ['required' , 'string' , 'max:255'],
            'subtitle_en' => ['required' , 'string' , 'max:255'],
            'subtitle_ar' => ['required' , 'string' , 'max:255'],
            'description1_en' => ['required'],
            'description1_ar' => ['required'],
            'title1_en' => ['required' , 'string' , 'max:255'],
            'title1_ar' => ['required' , 'string' , 'max:255'],
            'description2_en' => ['required'],
            'description2_ar' => ['required']
        ];
    }

    public function attributes()
    {
        return [
            'image' => 'Image',
            'title_en' => 'First section title (EN)',
            'title_ar' => 'First section title (AR)',
            'subtitle_en' => 'First section subtitle (EN)',
            'subtitle_ar' => 'First section subtitle (AR)',
            'description1_en' => 'First section description (EN)',
            'description1_ar' => 'First section description (AR)',
            'title1_en' => 'Second section title (EN)',
            'title1_ar' => 'Second section title (AR)',
            'description2_en' => 'Second section description (EN)',
            'description2_ar' => 'Second section description (AR)',
        ];
    }
}
