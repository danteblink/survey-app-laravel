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


class investigacionController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {

         $user = Auth::user();
         $userId = Auth::id();
         $sectores = $request->input('sectores'); // Recuperar el array del checkbox
         $lineas = $request->input('lineas');
         if (is_null($sectores)) // Si no hay ninguno seleccionado le pasamos un array vacio para que funcione SYNC
            $sectores[]='';

         if (is_null($lineas))
            $lineas[]='';

         $user->sectores()->sync($sectores);  // actualiza la tabla users_sectores con los nuevos valores
         $user->lineas()->sync($lineas);

         $otrosSectores = $user->otros_sectores()->firstOrNew(['user_id'=>$userId]);
         $otrosSectores -> name = $request->input('otrosSectores');
         $otrosSectores-> save();

         $otrasLineas = $user->otras_lineas()->firstOrNew(['user_id'=>$userId]);
         $otrasLineas -> name = $request->input('otrasLineas');
         $otrasLineas-> save();

         return redirect('home#datosInvestigador')->with('message','Datos Guardados Correctamente');
    }


}