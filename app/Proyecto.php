<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public $timestamps = false;
    protected $table = 'proyectos';
    protected $fillable = ['name', 'user_id'];
    public function users()
    {
        return $this->belongsTo('App\User');
    }


}
