<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionProtection extends Model
{
    //
    public function reservations(){
        return $this->belongsToMany(Reservation::class);
    }
}
