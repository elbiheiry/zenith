<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AramexRequest extends FormRequest
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
            'zip_code' => ['required' , 'numeric'],
            'line1' => ['required' , 'string' , 'min:5'],
            'line2' => ['required' , 'string' , 'min:5'],
            'pickup_date' => ['required' , 'date'],
            'ready_time' => ['required'],
            'last_pickup_time' => ['required'],
            'closing_time' => ['required'],
            'shipping_date_time' => ['required'],
            'due_date' => ['required'],
            'pickup_location' => ['required' , 'string'],
            'weight' => ['required' , 'numeric'],
            'volume' => ['required' , 'numeric'],
            // 'comments' => ['required'],
            // 'description' => ['required']
        ];
    }
}
