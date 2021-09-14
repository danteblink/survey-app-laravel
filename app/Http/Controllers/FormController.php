<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\country;
use App\Institucion;
use App\Personales;

class FormController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
        {
        $family = Personales::create([
                    'curp' => $request->input('curp'),
                    'telefono' => $request->input('telefono'),
                    'genero' => $request->input('genero'),
                    'grado' => $request->input('grado'),
                    'paisGrado' => $request->input('paisGrado'),
                    'institucionGrado' => $request->input('institucionGrado'),
                    'departamento' => $request->input('usuarioDepartamento'),
                    'nombramiento' => $request->input('usuarioNombramiento'),
                    'sni' => $request->input('usuarioSni'),
                    'prodep' => $request->input('usuarioProdep'),
                ]);

        $sectores = $request->input('sectores');

        return redirect('home');
    }
}
