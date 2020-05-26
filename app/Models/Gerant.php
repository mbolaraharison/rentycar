<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerant extends Model
{
    //
    public function plaintes(){
        return $this->belongsToMany(Plainte::class);
    }

    public function documents(){
        return $this->belongsToMany(Document::class);
    }

    public function droits(){
        return $this->morphedByMany(Droit::class, 'droit');
    }

    public function assurances(){
        return $this->belongsToMany(Assurance::class);
    }
}
