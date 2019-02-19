<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class SinCalController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('sincal');
    	return $pdf->download('SinCalificacion.pdf');
    }
}
