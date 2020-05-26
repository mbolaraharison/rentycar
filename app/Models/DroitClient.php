<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DroitClient extends Model
{
    //
    public function droit(){
        return $this->belongsTo(Droit::class);
    }

    public function clients(){
        return $this->morphToMany(Client::class, 'droit');
    }
}
