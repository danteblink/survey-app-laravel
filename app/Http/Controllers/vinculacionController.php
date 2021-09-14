<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vinculacion;
use App\User;
use Auth;
use Response;


class vinculacionController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request){
        $user = Auth::id();
        if ($request->ajax()){
          $vinculacion = Vinculacion::create([
              'name' => $request->input('nombre'),
              'type' => $request->input('tipo'),
              'user_id'=> $user,
          ]);
        $nombre = $request->input('nombre');
        $userVinculaciones = Vinculacion::where('name', '=', $nombre)->first();
        return Response::json($userVinculaciones);
        }
    }

    public function delete($id)
    {
        Vinculacion::destroy($id);

        return Response::json('Borrado');
    }

}