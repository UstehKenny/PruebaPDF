<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class ConCalController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('concal');
    	return $pdf->download('ConCalificacion.pdf');
    }
}
