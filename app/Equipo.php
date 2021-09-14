<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public $timestamps = false;
    protected $table = 'equipos';
    protected $fillable = ['name', 'marca', 'modelo', 'acceso', 'user_id'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
