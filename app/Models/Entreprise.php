<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function agences(){
        return $this->hasMany(Agence::class);
    }

    public function clients(){
        return $this->belongsToMany(Client::class);
    }

    public function documents(){
        return $this->hasMany(Document::class);
    }

    public function droitEntreprises(){
        return $this->morphedByMany(DroitEntreprise::class, 'droit');
    }

}
