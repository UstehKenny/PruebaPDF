<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class CSolicitadosController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('csolicitados');
    	return $pdf->download('CursosSolicitados.pdf');
    }
}
