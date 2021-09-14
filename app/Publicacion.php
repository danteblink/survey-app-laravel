<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    public $timestamps = false;
        protected $table = 'publicaciones';
        protected $fillable = ['name', 'user_id'];
        public function users()
        {
            return $this->belongsTo('App\User');
        }
}
