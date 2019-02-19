<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class CursoACDDController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('cursoacddc');
    	return $pdf->download('CursoAcreditadoCDD.pdf');
    }
}
