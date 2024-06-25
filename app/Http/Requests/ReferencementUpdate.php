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
            'page' => 'bail|min:3|required',
            // 'name' => 'bail|min:3|required',
            // 'content' => 'bail|min:5|required',
            // 'property' => 'bail|min:5|required',
            // 'rel' => 'bail|min:5|required',
            // 'href' => 'bail|min:5|required',
           
            //'classement' => 'bail|integer|required',
            'picture' => 'image|mimes:jpeg,jpg,png'
        ];
    }
}
