<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibelleRequest extends FormRequest
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


        ///// overide messages function

        public function messages()
        {
            return [
                //'title.required' => 'A title is required',
                //'content.required' => 'A message is required',
            ];
        }
        

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'libelle' => 'bail|required|max:100',
            
            
            
        ];
    }
}



