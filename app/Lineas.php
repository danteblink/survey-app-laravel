<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lineas extends Model
{
    public $timestamps = false;
    protected $table = 'lineas';

    public function users()
    {
        return $this->belongsToMany('App\User', 'users_lineas');
    }
}
