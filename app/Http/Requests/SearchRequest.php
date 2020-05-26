<?php

namespace App\Http\Requests;

use App\Rules\DateRestitutionRule;
use App\Rules\HeureRestitutionRule;
use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

use App\Rules\SearchRules;

class SearchRequest extends FormRequest
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
        $rules =  [
            'lieu_prise_en_charge'=>'required',
            'date_prise_en_charge'=>'required|date_format:Y-m-d|after:yesterday',
            'heure_prise_en_charge'=>'required|date_format:g:i A',
            'date_restitution'=>['required', 'date_format:Y-m-d', new DateRestitutionRule()],
            'heure_restitution'=> ['required', new HeureRestitutionRule, 'date_format:g:i A'],
        ];

        if(Input::get('check_lieu_restitution')){
            $rules['lieu_restitution']='required';
        }
        return $rules;
    }

    public function messages(){
        return [
            'lieu_prise_en_charge.required'=>'Vous devez entrer un lieu de départ',
            'lieu_restitution.required'=>'Vous devez entrer un lieu de restitution',
            'date_prise_en_charge.required'=>'Vous devez entrer une date de prise en charge',
            'date_prise_en_charge.format'=>'Le format de la date est : Y-m-d',
            'date_prise_en_charge.after'=>'La date de prise en charge doit être postérieure à la date d\'hier',
            'heure_prise_en_charge.required'=>'Vous dever entrer une heure de prise en charge',
            'heure_prise_en_charge.date_format'=>'Le format de l\'heure est : hh:mm AM/PM',//doit être traité d'une manière conditionnelle
            'date_restitution.required'=>'Vous devez entrer une date de restitution',
            'date_restitution.date_format'=>'Le format de la date est : Y-m-d',
            'heure_restitution.date_format'=>'Le format de l\'heure est : hh:mm AM/PM',
        ];
    }
}
