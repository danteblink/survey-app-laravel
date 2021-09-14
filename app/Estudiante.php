<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{

    public $timestamps = false;
    protected $table = 'estudiantes';
    protected $fillable = ['posgrado', 'programa', 'tutor', 'proyecto', 'user_id'];

    public function users(){
        return $this->belongsTo('App\User');
   }
}
