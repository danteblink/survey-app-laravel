<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personales extends Model
{

    protected $fillable = ['curp', 'telefono', 'genero', 'grado', 'paisGrado', 'institucionGrado', 'sni', 'prodep', 'nombreProdep', 'user_id','areaPeciti', 'areaSni', 'areaConocimiento', 'numeroRcea', 'numeroCvu', 'emailI', 'emailP' ];

    public function paises(){
              return $this->belongsTo('country');
           }
    public function instituciones(){
        return $this->belongsTo('Institucion');
    }
    public function users(){
        return $this->belongsTo('App\User');
   }
}
