<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $guarded = [];

    public function partida(){
        return $this->hasMany('App\Partida','id');
     }
}
