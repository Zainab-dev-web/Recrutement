<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $table='evaluations';

    //One to many
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function presence(){
        return $this->belongsTo('App\Presence');
    }
    public function note(){
        return $this->belongsTo('App\Note');
    }
    public function event(){
        return $this->belongsTo('App\Event');
    }
   
}
