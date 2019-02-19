<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class ResumenController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('resumen');
    	return $pdf->download('Resumen.pdf');
    }
}
