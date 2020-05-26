<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DroitAgence extends Model
{
    //
    public function droit(){
        return $this->belongsTo(Droit::class);
    }

    public function agences(){
        return $this->morphToMany(Agence::class, 'droit');
    }
}
