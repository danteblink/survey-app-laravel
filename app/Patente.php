<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patente extends Model
{
    public $timestamps = false;
    protected $table = 'patentes';
    protected $fillable = ['name', 'situacion', 'autores', 'paises', 'user_id'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
