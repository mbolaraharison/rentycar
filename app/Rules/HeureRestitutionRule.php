<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Input;

class HeureRestitutionRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        /* Another way to check if a request has been validated its rules
        $req = new SearchRequest();
        $rules = $req->rules();
        $lieu = ['lieu_prise_en_charge'=>''.Input::get('lieu_prise_en_charge').''];
        $lieuRule = ['lieu_prise_en_charge'=>''.$rules['lieu_prise_en_charge'].''];
        $validatePriseEnCharge = Validator::make($lieu, $lieuRule);
        */
        $heurePriseEnCharge = Carbon::createFromFormat('g:i A', Input::get('heure_prise_en_charge'));
        $heureRestitution = Carbon::createFromFormat('g:i A', Input::get('heure_restitution'));
        if(Carbon::parse(Input::get('date_prise_en_charge'))->ne(Carbon::parse(Input::get('date_restitution')))){
            return true;
        }else if(Carbon::parse(Input::get('date_prise_en_charge'))->eq(Carbon::parse(Input::get('date_restitution'))) && $heureRestitution->gt($heurePriseEnCharge->add(179, 'minutes'))){
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'L\'heure de restitution doit être postérieure à l\'heure de prise en charge au moins de 3h dans la même journée';
    }
}
