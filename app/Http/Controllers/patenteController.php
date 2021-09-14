<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Patente;
use App\User;
use Auth;
use Response;


class patenteController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request){
        $user = Auth::id();
        if ($request->ajax()){
          $patente = Patente::create([
              'name' => $request->input('nombre'),
              'situacion' => $request->input('situacion'),
              'autores' => $request->input('autores'),
              'paises' => $request->input('paises'),
              'user_id'=> $user,
          ]);
        $nombre = $request->input('nombre');
        $userPatentes = Patente::where('name', '=', $nombre)->first();
        return Response::json($userPatentes);
        }
    }

    public function delete($id)
    {
        Patente::destroy($id);

        return Response::json('Borrado');
    }

}