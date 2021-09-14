<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Equipo;
use App\User;
use Auth;
use Response;


class equipoController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request){
        $user = Auth::id();
        if ($request->ajax()){
          $equipo = Equipo::create([
              'name' => $request->input('nombre'),
              'marca' => $request->input('marca'),
              'modelo' => $request->input('modelo'),
              'acceso' => $request->input('acceso'),
              'user_id'=> $user,
          ]);
        $nombre = $request->input('nombre');
        $userEquipos = Equipo::where('name', '=', $nombre)->first();
        return Response::json($userEquipos);
        }
    }

    public function delete($id)
    {
        Equipo::destroy($id);

        return Response::json('Borrado');
    }

}