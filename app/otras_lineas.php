<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class otras_lineas extends Model
{
    public $timestamps = false;
    protected $table = 'otras_lineas';
    protected $fillable = ['name', 'user_id'];
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
