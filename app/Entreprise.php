<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $table='entreprises';
    
    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function evaluation() {
        return $this->hasMany('App\Evaluation');
        }

        protected $fillable = ['nom', 'date', 'numero', 'tva','adresse','domaine','logo','pNom','pEmail','pTel','email','valid', 'role_id', 'password'];
}
