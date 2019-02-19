<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class SugerenciasController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('sugerencias');
    	return $pdf->download('SugerenciasCursos.pdf');
    }
}
