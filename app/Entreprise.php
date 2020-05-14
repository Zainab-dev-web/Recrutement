<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class Entreprise extends Authenticatable
{
    use Notifiable;

    protected $table='entreprises';
    
    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function evaluation() {
        return $this->hasMany('App\Evaluation');
        }

        protected $fillable = ['nom', 'date', 'numero', 'tva','adresse','domaine','logo','pNom','pTel','email','valid', 'role_id', 'password'];

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
