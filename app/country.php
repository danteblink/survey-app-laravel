<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $table = 'countries';
    public function instituciones(){
        return $this->hasMany('Institucion');
    }
    public function personales(){
        return $this->hasMany('Personales');
    }

}
