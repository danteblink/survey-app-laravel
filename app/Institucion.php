<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{

    protected $fillable = ['nombre','country_id', 'web', 'direccion'];

    public function pais(){
          return $this->belongsTo('country');
       }
     public function personales(){
            return $this->hasMany('Personales');
        }
}
