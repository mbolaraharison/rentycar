<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DroitEntreprise extends Model
{
    //
    public function droit(){
        return $this->belongsTo(Droit::class);
    }

    public function entreprises(){
        return $this->morphToMany(Entreprise::class, 'droit');
    }
}
