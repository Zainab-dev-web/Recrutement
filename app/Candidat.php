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
    public function user(){
        return $this->belongsTo('App\User', 'user_id' );
    }
//Many to Many
    public function date(){
    return $this->belongsTo('App\Date', 'date_id');
    }
    
}
