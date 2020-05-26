<?php

namespace App\Http\Requests;

use App\MyMethods\MyMethods;
use Illuminate\Foundation\Http\FormRequest;

class SignUpClientRequest extends FormRequest
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
            'nom_client' => 'required',
            'prenom_client' => 'required',
            'date_naissance' => 'required',
            'telephone_client' => 'required',
            'email_client' => 'required',
            'mot_de_passe_client' => 'required',
            'confirmer_mot_de_passe_client' => 'required',
        ];
        return $rules;
    }

    public function messages()
    {
        $messages = [
            'nom_client.required' => MyMethods::generateMessageRequired('nom_client', 'm', 'p', 'n'),
            'prenom_client.required' => MyMethods::generateMessageRequired('prenom_client', 'm', 'p', 'n'),
            'date_naissance.required' => 'Vous devez entrer votre date de naissance',
            'telephone_client.required' => MyMethods::generateMessageRequired('telephone_client', 'm', 'p', 'n'),
            'email_client.required' => MyMethods::generateMessageRequired('email_client', 'nm', 'p', 'n'),
            'mot_de_passe_client.required' => MyMethods::generateMessageRequired('mot_de_passe_client', 'm', 'p', 'n'),
            'confirmer_mot_de_passe_client.required' => 'Vous devez confirmer votre mot de passe',
        ];
        return $messages;
    }
}
