<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class AsistenciaAController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('asistencia');
    	return $pdf->download('AsistenciaAcreditados.pdf');
    }
}
