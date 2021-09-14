<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    public $timestamps = false;
    protected $table = 'miembros';
    protected $fillable = ['nombre', 'curp', 'grado', 'user_id'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
