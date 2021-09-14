<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\country;
use App\Institucion;
use App\Personales;
use App\Sector;
use App\User;
use App\Lineas;
use Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        $paises = country::lists('name','id'); // Obtener los paises dela BD
        $instituciones = Institucion::lists('nombre', 'id'); // Obtener las instituciones de la BD
        $sectoresUser = $user->sectores()->get()->toArray(); // Obtener los sectores del usuario
        $sectoresUser = array_pluck($sectoresUser, 'name'); // Obtener solo el nombre
        $sectores = Sector::lists('name', 'id');
        $lineasUser = $user->lineas()->get()->toArray(); // Obtener las lineas del usuario
        $lineasUser = array_pluck($lineasUser, 'name'); // Obtener solo el nombre
        $lineas = Lineas::lists('name', 'id');
        $proyectosUser = $user->proyectos;
        $publicacionesUser = $user->publicaciones;
        $patentesUser = $user->patentes;
        $vinculacionesUser = $user->vinculaciones;
        $equiposUser = $user->equipos;
        $personales = $user->personales;
        $miembrosUser = $user->miembros;
        $grupoUser = $user->grupo;


        if ($user->perfil === '1'){
            return \View::make('home', compact('paises', 'instituciones', 'sectores', 'sectoresUser', 'lineas', 'lineasUser',  'proyectosUser', 'publicacionesUser', 'patentesUser','vinculacionesUser', 'equiposUser','personales', 'miembrosUser', 'grupoUser'));
        }


        else if  ($user->perfil === '2'){
            $datosEstudiante = $user->estudiante;
            return \View::make('home2', compact('paises', 'instituciones', 'personales', 'datosEstudiante' ));
        }

        else if ($user->perfil === '3'){
             $investigadores = User::where('perfil', 1)->get();
             $estudiantes = User::where('perfil', 2)->get();
             return \View::make('home3',compact('investigadores', 'estudiantes'));
        }
     }

}