<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    //
    public function voitures(){
        return $this->hasMany(Voiture::class);
    }

    public function modeles(){
        return $this->hasMany(Modele::class);
    }
}
