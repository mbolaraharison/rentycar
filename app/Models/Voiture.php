<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    //
    public function agence(){
        return $this->belongsTo(Agence::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }

    public function specifications(){
        return $this->belongsToMany(Specification::class);
    }

    public function marque(){
        return $this->belongsTo(Marque::class);
    }

    public function assurances(){
        return $this->hasMany(Assurance::class);
    }

    public function clients(){
        return $this->belongsToMany(Client::class);
    }
}
