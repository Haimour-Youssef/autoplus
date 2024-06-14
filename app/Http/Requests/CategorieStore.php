<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategorieStore extends FormRequest
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

            'title' => 'bail|min:5|required|max:100',
           
            //'classement' => 'bail|integer|required',
            'picture' => 'image|mimes:jpeg,jpg,png|dimensions:width=85,min_height=85'
        ];
    }
}
