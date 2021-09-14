<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Miembro;
use App\User;
use Auth;
use Response;


class miembroController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request){
        $user = Auth::id();
        if ($request->ajax()){
          $meimbro = Miembro::create([
              'nombre' => $request->input('nombre'),
              'curp' => $request->input('curp'),
              'grado' => $request->input('grado'),
              'user_id'=> $user,
          ]);
        $nombre = $request->input('nombre');
        $userMiembros = Miembro::where('nombre', '=', $nombre)->first();
        return Response::json($userMiembros);
        }
    }

    public function delete($id)
    {
        Miembro::destroy($id);

        return Response::json('Borrado');
    }

}