<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $table = 'roles';
     /**
      * Get users with a certain role
      */
     public function users()
     {
         return $this->belongsToMany('User', 'user_roles');
     }
}
