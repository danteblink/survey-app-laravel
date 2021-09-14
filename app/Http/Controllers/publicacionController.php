<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\country;
use App\Institucion;
use App\Publicacion;
use App\User;
use Auth;
use Response;


class publicacionController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request){
        $user = Auth::id();
        if ($request->ajax()){
          $publicacion = Publicacion::create([
              'name' => $request->input('nombre'),
              'user_id'=> $user,
          ]);
        $nombre = $request->input('nombre');
        $userPublicaciones = Publicacion::where('name', '=', $nombre)->first();
        return Response::json($userPublicaciones);
        }
    }

    public function delete($id)
    {
        Publicacion::destroy($id);

        return Response::json('Borrado');
    }

}