<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Droit extends Model
{
    //
    public function gerants(){
        return $this->morphToMany(Gerant::class, 'droit');
    }

    public function droitEntreprises(){
        return $this->hasMany(DroitEntreprise::class);
    }

    public function droitAgences(){
        return $this->hasMany(DroitAgence::class);
    }

    public function droitClients(){
        return $this->hasMany(DroitClient::class);
    }
}
