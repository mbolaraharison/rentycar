<?php

namespace App\Http\Requests;

use App\MyMethods\MyMethods;
use Illuminate\Foundation\Http\FormRequest;

class AjoutAgenceRequest extends FormRequest
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
        $rules = [
            'ville_agence' => 'required',
            'adresse_agence' => 'required',
            'telephone_agence' => 'required',
            'email_agence' => 'required',
            'mot_de_passe_agence' => 'required',
            'confirmer_mot_de_passe_agence' => 'required',
        ];
        return $rules;
    }

    public function messages(){
        $messages = [
            'ville_agence.required' => MyMethods::generateMessageRequired('ville', 'f', 'd', 'n'),
            'adresse_agence.required' => MyMethods::generateMessageRequired('adresse_agence', 'nf', 'd', 'n'),
            'telephone_agence.required' => MyMethods::generateMessageRequired('telephone_agence', 'm', 'd', 'n'),
            'email_agence.required' => MyMethods::generateMessageRequired('email_agence', 'nm', 'i', 'n'),
            'mot_de_passe_agence.required' => MyMethods::generateMessageRequired('mot_de_passe_agence', 'm', 'i', 'n'),
            'confirmer_mot_de_passe_agence.required' => 'Vous devez confirmer le mot de passe',
        ];
        return $messages;
    }
}
