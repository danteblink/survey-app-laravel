<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\country;
use App\Institucion;
use App\Personales;

class institucionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request) {
        // Getting all post data

        if ($request->ajax()){
          $institucion = Institucion::create([
              'nombre' => $request->input('nombre'),
              'country_id' => $request->input('country_id'),
              'web' => $request->input('web'),
              'direccion' => $request->input('direccion'),
          ]);

        $instituciones = Institucion::lists('nombre', 'id'); // Obtener las instituciones de la BD
        return Response::json($instituciones);
        }
    }

}