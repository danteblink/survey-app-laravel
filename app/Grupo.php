<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public $timestamps = false;
    protected $table = 'grupos';
    protected $fillable = ['institucion', 'pais', 'grupo', 'user_id', 'departamento', 'nombramiento'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
