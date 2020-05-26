<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    public function agence(){
        return $this->belongsTo(Agence::class);
    }

    public function conducteur(){
        return $this->belongsTo(Conducteur::class);
    }

    public function optionProtections(){
        return $this->belongsToMany(OptionProtection::class);
    }

    public function carteDeCredit(){
        return $this->belongsTo(CarteDeCredit::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function voiture(){
        return $this->belongsTo(Voiture::class);
    }
}
