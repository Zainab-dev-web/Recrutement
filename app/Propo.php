<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propo extends Model
{
    protected $table = "propos";

    public function offre(){
        return $this->belongsTo('App\Offre', 'offre_id' );
    }
   public function talent(){
       return $this->belongsTo('App\Talent', 'talent_id' );
   }

   public function entreprise(){
    return $this->belongsTo('App\Entreprise', 'entreprise_id' );
}
}
