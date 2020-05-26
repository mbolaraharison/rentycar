<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvisEntreprise extends Model
{
    //
    public function avis(){
        return $this->belongsTo(Avis::class);
    }
}
