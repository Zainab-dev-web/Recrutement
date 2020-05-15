<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propo extends Model
{
    protected $table = "propos";

    public function offre(){
        return $this->belongsTo('App\Offre', 'offre_id' );
    }
   public function user(){
       return $this->belongsTo('App\User', 'user_id' );
   }
}
