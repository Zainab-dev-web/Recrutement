<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $table='offres';

    public function candidat(){
        return $this->hasMany(Candidat::class , 'candidat_id');
    }
    public function entreprise(){
        return $this->belongsTo('App\Entreprise');
    }

    public function statut(){
        return $this->belongsTo('App\Statut');
    }
}
