<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class otros_sectores extends Model
{
    public $timestamps = false;
    protected $table = 'otros_sectores';
    protected $fillable = ['name', 'user_id'];
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
