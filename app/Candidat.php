<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{

    protected $table='candidats';
    
//One to Many
    public function offre(){
         return $this->belongsTo('App\Offre', 'offre_id' );
     }
    public function talent(){
        return $this->belongsTo('App\Talent', 'talent_id' );
    }
//Many to Many
    public function dates(){
    return $this->belongsToMany(Date::class, 'candidat_date');
    }
}
