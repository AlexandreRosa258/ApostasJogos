<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $guarded = [];

    public function logo()
    {
        return $this->belongsTo('App\Logo','id');
    }
}
