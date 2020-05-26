<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use App\MyMethods\MyMethods;

class SignUpEntrepriseRequest extends FormRequest
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
            'nom_entreprise' => 'required',
            'statut_juridique' => 'required',
            'raison_sociale' => 'required',
            'email_entreprise' => 'required',
            'mot_de_passe_entreprise' => 'required',
            'confirmer_mot_de_passe_entreprise' => 'required',
            'adresse_entreprise' => 'required',
            'telephone_entreprise' => 'required',
            'siege_social' => 'required',
            'ville_entreprise' => 'required',
            'duns' => 'required',
            'description_entreprise' => 'required',
        ];
        return $rules;
    }

    public function messages(){
        $messages = [
            'nom_entreprise.required' => MyMethods::generateMessageRequired('nom_entreprise', 'm', 'd', 'y'),
            'statut_juridique.required' => MyMethods::generateMessageRequired('statut_juridique', 'm', 'd', 'y'),
            'raison_sociale.required' => MyMethods::generateMessageRequired('raison_sociale', 'f', 'd', 'y'),
            'email_entreprise.required' => MyMethods::generateMessageRequired('email_entreprise', 'nm', 'i', 'n'),
            'mot_de_passe_entreprise.required' => MyMethods::generateMessageRequired('mot_de_passe_entreprise', 'm', 'i', 'n'),
            'confirmer_mot_de_passe_entreprise.required' => 'Vous devez confirmer votre mot de passe',
            'adresse_entreprise.required' => MyMethods::generateMessageRequired('adresse_entreprise', 'nf', 'd', 'y'),
            'telephone_entreprise.required' => MyMethods::generateMessageRequired('telephone_entreprise', 'm', 'd', 'y'),
            'siege_social.required' => MyMethods::generateMessageRequired('siege_social', 'm', 'd', 'y'),
            'ville_entreprise.required' => MyMethods::generateMessageRequired('ville_entreprise', 'f', 'd', 'y'),
            'duns.required' => MyMethods::generateMessageRequired('duns', 'm', 'd', 'y'),
            'description_entreprise.required' => MyMethods::generateMessageRequired('description_entreprise', 'f', 'i', 'y'),
        ];
        return $messages;
    }
}
