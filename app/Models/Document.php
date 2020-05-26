<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    public function gerants(){
        return $this->belongsToMany(Gerant::class);
    }

    public function entreprise(){
        return $this->belongsTo(Entreprise::class);
    }
}
