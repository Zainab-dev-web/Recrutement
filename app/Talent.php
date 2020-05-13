<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    protected $table='talents'; 

    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function evaluation() {
        return $this->hasMany('App\Evaluation');
    }
}
