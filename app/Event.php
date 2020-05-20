<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";

    protected $fillable = ['user_id', 'start', 'end', 'title'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
