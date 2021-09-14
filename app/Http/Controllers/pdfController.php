<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Institucion;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pdfController extends Controller
{
        public function invoice($id)
        {
            $user = User::find($id);
            $personales = $user -> personales;
            $grupos = $user -> grupo; 
            if (isset($grupos)){
            	$institucion = Institucion::find($grupos->institucion);
            	}
            $miembros = $user -> miembros;
            $sectores = $user -> sectores;
            $otros_sectores = $user -> otros_sectores;
            $lineas = $user -> lineas;
            $otras_lineas = $user -> otras_lineas;
            $proyectos = $user -> proyectos;
            $publicaciones = $user-> publicaciones;
            $patentes = $user -> patentes;
            $vinculaciones = $user -> vinculaciones;
            $equipos = $user -> equipos;
            $view =  \View::make('pdf', compact('user', 'personales', 'grupos', 'institucion', 'miembros', 'sectores', 'otros_sectores', 'lineas', 'otras_lineas', 'proyectos', 'publicaciones', 'patentes', 'vinculaciones', 'equipos'))->render();
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream();
        }
         public function invoiceStudent($id)
        {
            $user = User::find($id);
            $personales = $user -> personales;
            $datosEstudiante = $user -> estudiante;
            $view =  \View::make('pdf2', compact('user', 'personales', 'datosEstudiante'))->render();
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream();
        }
 }
