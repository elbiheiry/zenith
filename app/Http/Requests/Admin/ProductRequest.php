<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductRequest extends FormRequest
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
            // 'school_id' => ['required'],
            'name_en' => ['required' , 'string' , 'max:255'],
            'name_ar' => ['required' , 'string' , 'max:255'],
            'description_en' => ['required' , 'string'],
            'description_ar' => ['required' , 'string'],
            'features_en' => ['required' , 'string'],
            'features_ar' => ['required' , 'string'],
            'legal_en' => ['required' , 'string'],
            'legal_ar' => ['required' , 'string'],
            'terms_en' => ['required' , 'string'],
            'terms_ar' => ['required' , 'string'],
            'sku' => $this->isMethod('post') ? ['required' , 'string' , 'unique:product_specifications,sku'] : [],
            'price' => $this->isMethod('post') ? ['required' , 'numeric'] : [],
            // 'capacity_id' => $this->isMethod('post') ? ['required' , 'not_in:0'] : [],
            'color_id' => $this->isMethod('post') ? ['required' , 'not_in:0'] : [],
            // 'connectivity' => $this->isMethod('post') ? ['required' , 'not_in:0'] : [],
        ];
    }

    public function attributes()
    {
        return [
            'image' => 'Product main image',
            'sku' => 'Product SKU',
            'quantity' => 'Product quantity',
            'connectivity' => 'Product connectivity',
            'school_id' => 'School',
            'capacity_id' => 'Capacity',
            'color_id' => 'Color',
            'price' => 'Product price',
            'name_en' => 'Product name (EN)',
            'name_ar' => 'Product name (AR)',
            'description_en' => 'Product description (EN)',
            'description_ar' => 'Product description (AR)',
            'features_en' => 'Product features (EN)',
            'features_ar' => 'Product features (AR)',
            'legal_en' => 'Product legal (EN)',
            'legal_ar' => 'Product legal (AR)',
            'terms_en' => 'Product terms (EN)',
            'terms_ar' => 'Product terms (AR)',
        ];
    }
}
