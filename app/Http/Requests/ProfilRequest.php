<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilRequest extends FormRequest
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


            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:50'],
            'tel' => ['required', 'string', 'max:50'],
            'contrat' => ['required'],
            'metier' => ['required'],
            //mimes:jpeg,png,jpg,zip,pdf|max:2048
            //'cv' => ['required'],
            //'required|file|max:5000|mimes:pdf,docx,doc'
            //'motivation' => ['mimes:doc,docx,pdf,jpeg,jpg,png'],
            'mobilite' => ['required'],
            'adresse' => ['required', 'string', 'max:100'],
            'username' => ['required', 'string', 'min:8', 'unique:users,username,'.$this->user->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$this->user->id],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],

            

        ];
    }
}
