<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $table='dates';
    public function candidats(){
        return $this->belongsToMany(Candidat::class, 'candidat_date');
        }
}
