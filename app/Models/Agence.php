<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function entreprise(){
        return $this->belongsTo(Entreprise::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }

    public function droitAgences(){
        return $this->morphedByMany(DroitAgence::class, 'droit');
    }

    public function voitures(){
        return $this->hasMany(Voiture::class);
    }

    public function clients(){
        return $this->belongsToMany(Client::class);
    }

    public function joursDeTravailParSemaines(){
        return $this->belongsToMany(JoursDeTravailParSemaine::class);
    }

    public function conges(){
        return $this->belongsToMany(Conge::class);
    }
}
