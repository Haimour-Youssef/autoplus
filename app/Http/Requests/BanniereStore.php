<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BanniereStore extends FormRequest
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
            'classement' => 'bail|integer|required',
            'picture' => 'required|image|mimes:jpeg,jpg|dimensions:width=1920,min_height=600'
        ];
    }
}
