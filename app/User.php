<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function role(){
        
        return $this->belongsTo('App\Role');
    }
    public function offre(){
        return $this->belongsTo('App\Offre');
    }
    public function statut(){
        return $this->belongsTo('App\Statut');
    }
    public function resultat(){
        return $this->belongsTo('App\Resultat');
    }
    public function evaluation() {
        return $this->hasMany('App\Evaluation');
    }

    public function event() {
        return $this->hasMany('App\Event');
    }

    public function offres(){
        return $this->belongsToMany(Offre::class, 'offre_match');
    }

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'prénom', 'photo', 'email','adresse','statut_id','véhicule','dispo','domaine','cv','valid', 'role_id', 'password', 'date', 'numero', 'tva','logo','pNom','pTel', 'resultat_id'];

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
