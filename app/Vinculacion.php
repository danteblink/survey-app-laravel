<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vinculacion extends Model
{
    public $timestamps = false;
    protected $table = 'vinculaciones';
    protected $fillable = ['name', 'type', 'user_id'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
