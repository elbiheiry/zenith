<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SocialLinkRequest extends FormRequest
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

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors()->first() , 400));
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
   public function rules()
   {
       return [
            'name' => ['required' , 'string' , 'max:255'],   
            'icon' => ['required' , 'string' , 'max:255'],
            'link' => ['required' , 'string' , 'max:255']
       ];
   }

   public function attributes()
   {
       return [
            'name' => 'Name',
            'icon' => 'Icon',
            'link' => 'Link'
       ];
   }
}
