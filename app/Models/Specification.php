<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    //
    public function voitures(){
        return $this->belongsToMany(Voiture::class);
    }
}
