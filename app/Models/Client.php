<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function entreprises(){
        return $this->belongsToMany(Entreprise::class);
    }

    public function agences(){
        return $this->belongsToMany(Agence::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }

    public function voitures(){
        return $this->belongsToMany(Voiture::class);
    }

    public function droitClients(){
        return $this->morphedByMany(DroitClient::class, 'droit');
    }
}
