<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\country;
use App\Institucion;
use App\Proyecto;
use App\User;
use Auth;
use Response;


class proyectoController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

public function add(Request $request) {
            // Getting all post data
        $user = Auth::id();
        if ($request->ajax()){
          $proyecto = Proyecto::create([
              'name' => $request->input('nombre'),
              'user_id'=> $user,
          ]);
        $nombre = $request->input('nombre');
        $userProyectos = Proyecto::where('name', '=', $nombre)->first();
        return Response::json($userProyectos);
        }
    }

    public function delete($id)
    	{
    		Proyecto::destroy($id);

    		return Response::json('Borrado');
    	}

}