<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    //
    public function agences(){
        return $this->belongsToMany(Agence::class);
    }
}
