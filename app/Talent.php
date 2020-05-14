<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class Talent extends Authenticatable
{
    protected $table='talents'; 

    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function evaluation() {
        return $this->hasMany('App\Evaluation');
    }

    protected $fillable = ['nom', 'prénom', 'photo', 'email','adresse','numéro','statut_id','véhicule','dispo','domaine','cv','valid', 'role_id', 'password'];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
       'password', 'remember_token',
   ];

   /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
   protected $casts = [
       'email_verified_at' => 'datetime',
   ];
}
