<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $table='offres';

    public function candidat(){
        return $this->hasMany(Candidat::class , 'candidat_id');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function statut(){
        return $this->belongsTo('App\Statut');
    }

    public function event(){
        return $this->hasMany(Event::class, 'event_id');
    }

     //Many to many
     public function matchs(){
        return $this->belongsToMany(User::class, 'offre_match');
        }
}
