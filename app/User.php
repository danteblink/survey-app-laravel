<?php

namespace App;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'perfil', 'password','confirmed', 'confirmation_code'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function sectores()
    {
         return $this->belongsToMany('App\Sector', 'users_sectores');
     }

    public function lineas()
    {
         return $this->belongsToMany('App\Lineas', 'users_lineas');
    }

    public function proyectos()
    {
         return $this->hasMany('App\Proyecto');
    }
    public function publicaciones()
    {
         return $this->hasMany('App\Publicacion');
    }
    public function patentes()
    {
         return $this->hasMany('App\Patente');
    }
    public function vinculaciones()
    {
         return $this->hasMany('App\Vinculacion');
    }

    public function equipos()
    {
         return $this->hasMany('App\Equipo');
    }
    public function personales()
    {
         return $this->hasOne('App\Personales');
    }
     public function estudiante()
    {
         return $this->hasOne('App\Estudiante');
    }
    public function miembros()
    {
         return $this->hasMany('App\Miembro');
    }
     public function grupo()
    {
         return $this->hasOne('App\Grupo');
    }
     public function otros_sectores()
    {
         return $this->hasOne('App\otros_sectores');
    }

   public function otras_lineas()
   {
        return $this->hasOne('App\otras_lineas');
   }
}