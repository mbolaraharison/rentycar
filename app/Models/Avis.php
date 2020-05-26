<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    //
    public function avisEntreprises(){
        return $this->hasMany(AvisEntreprise::class);
    }

    public function avisAgences(){
        return $this->hasMany(AvisAgence::class);
    }

    public function avisVoitures(){
        return $this->hasMany(AvisVoiture::class);
    }
}
