<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BundleRequest extends FormRequest
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
            'image' => $this->isMethod('post') ? ['required' , 'image' , 'mimes:png,jpg,jpeg' ,'max:2048'] : ['image' , 'mimes:png,jpg,jpeg' ,'max:2048'],
            'school_id' => ['required' , 'not_in:0'],
            'name_en' => ['required' , 'string' , 'max:255'],
            'name_ar' => ['required' , 'string' , 'max:255'],
            'price' => ['required' , 'numeric'],
            'product_id' => ['required' , 'not_in:0'],
            'product_specification_id' => ['required' , 'not_in:0']
        ];
    }

    public function attributes()
    {
        return [
            'image' => 'Image',
            'school_id' => 'School',
            'name_en' => 'Name (EN)',
            'name_ar' => 'Name (AR)',
            'product_id' => 'Product',
            'product_specification_id' => 'Product SKU',
            'price' => 'Price'
        ];
    }
}
