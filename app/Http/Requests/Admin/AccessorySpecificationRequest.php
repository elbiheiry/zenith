<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AccessorySpecificationRequest extends FormRequest
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
            'sku' => $this->isMethod('post') ? ['required' , 'string' , 'unique:accessory_specifications,sku'] :['required' , 'string' , 'unique:accessory_specifications,sku,'.$this->id],
            'price' => ['required' , 'numeric'],
            // 'color_id' => ['required' , 'not_in:0']
        ];
    }

    public function attributes()
    {
        return [
            'SKU' => 'accessory SKU',
            'connectivity' => 'accessory connectivity',
            'capacity_id' => 'Capacity',
            'price' => 'accessory price',
            'color_id' => 'Color'
        ];
    }
}
