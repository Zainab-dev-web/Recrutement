<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $table='evalutions';

    //One to many
    
    public function talent(){
        return $this->belongsTo('App\Talent');
    }
    public function entreprise(){
        return $this->belongsTo('App\Entreprise');
    }
    public function presence(){
        return $this->belongsTo('App\Presence');
    }
    public function note(){
        return $this->belongsTo('App\Note');
    }
   
}
