<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    //
    public function voiture(){
        return $this->belongsTo(Voiture::class);
    }

    public function gerants(){
        return $this->belongsToMany(Gerant::class);
    }
}
