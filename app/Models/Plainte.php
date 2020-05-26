<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    //
    public function gerants(){
        return $this->belongsToMany(Gerant::class);
    }
}
