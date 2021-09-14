<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    public $timestamps = false;
    protected $table = 'sectores';

    public function users()
      {
        return $this->belongsToMany('App\User', 'users_sectores');
      }
}
