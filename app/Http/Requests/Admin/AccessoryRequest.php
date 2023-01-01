<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AccessoryRequest extends FormRequest
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
            'product_id' => ['not_in:0'],
            'name_en' => ['required' , 'string' , 'max:255'],
            'name_ar' => ['required' , 'string' , 'max:255'],
            'overview_en' => ['required' , 'string'],
            'overview_ar' => ['required' , 'string'],
            'sku' => $this->isMethod('post') ? ['required' , 'string' , 'unique:accessory_specifications,sku'] : [],
            'price' => $this->isMethod('post') ? ['required' , 'numeric'] : [],
            // 'color_id' => $this->isMethod('post') ? ['required' , 'not_in:0'] : [],
            // 'locale' => $this->isMethod('post') ? ['required'] : [],
        ];
    }

    public function attributes()
    {
        return [
            'image' => 'accessory main image',
            'product_id' => 'Product',
            'sku' => 'accessory SKU',
            'color_id' => 'Color',
            'price' => 'accessory price',
            'name_en' => 'accessory name (EN)',
            'name_ar' => 'accessory name (AR)',
            'overview_en' => 'accessory overview (EN)',
            'overview_ar' => 'accessory overview (AR)',
        ];
    }
}
