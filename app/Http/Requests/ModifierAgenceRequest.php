<?php

namespace App\Http\Requests;

use App\MyMethods\MyMethods;
use Illuminate\Foundation\Http\FormRequest;

class ModifierAgenceRequest extends FormRequest
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
            'ville_modifier_agence' => 'required',
            'adresse_modifier_agence' => 'required',
            'telephone_modifier_agence' => 'required',
            'email_modifier_agence' => 'required',
            'mot_de_passe_modifier_agence' => 'required',
            'confirmer_mot_de_passe_modifier_agence' => 'required',
        ];
        return $rules;
    }

    public function messages(){
        $messages = [
            'ville_modifier_agence.required' => MyMethods::generateMessageRequired('ville_modifier_agence', 'f', 'd', 'n'),
            'adresse_modifier_agence.required' => MyMethods::generateMessageRequired('adresse_modifier_agence', 'nf', 'd', 'n'),
            'telephone_modifier_agence.required' => MyMethods::generateMessageRequired('telephone_modifier_agence', 'm', 'd', 'n'),
            'email_modifier_agence.required' => MyMethods::generateMessageRequired('email_modifier_agence', 'nm', 'i', 'n'),
            'mot_de_passe_modifier_agence.required' => MyMethods::generateMessageRequired('mot_de_passe_modifier_agence', 'm', 'i', 'n'),
            'confirmer_mot_de_passe_modifier_agence.required' => 'Vous devez confirmer le mot de passe',
        ];
        return $messages;
    }
}
