<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Personales;
use App\User;
use Auth;
use Response;


class personalesController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request){
        $user = Auth::user();
        $userId = Auth::id();
        if ($request->ajax()){
          $personal = $user->personales()->firstOrNew(['user_id'=>$userId])->fill($request->all())->save(); // Si existe  user_id actualiza, si no, crea un nuevo elemento con los parametros del form

        return Response::json("success");
        }
    }

    public function update($id){

           
    }
        
    public function delete($id)
    {
        Personales::destroy($id);

        return Response::json('Borrado');
    }

}