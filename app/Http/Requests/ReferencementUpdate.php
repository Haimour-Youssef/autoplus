<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReferencementUpdate extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() 
    {
        return [

            'url' => 'bail|min:5|required',
            
            'name' => '',
            'content' => '',
            'property' => '',
            'rel' => '',
            'href' => '',
           
            //'classement' => 'bail|integer|required',
            'picture' => 'image|mimes:jpeg,jpg,png'
        ];
    }
}
