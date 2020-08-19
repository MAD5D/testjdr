<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requete_inscription extends FormRequest
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
		'pseudo' => 'required|min:3|max:15',
		'mot_de_passe' => 'required',
		'mot_de_passe_confirmation' => 'required|same:mot_de_passe',
		'mail' => 'required|email'
        ];
    }
}
