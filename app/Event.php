<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";

    protected $fillable = ['user_id', 'start', 'end', 'title', 'offre_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function offre(){
        return $this->belongsTo('App\Offre');
    }

    public function evaluation(){
        return $this->hasMany(Evaluation::class, 'evaluation_id');
    }
}
