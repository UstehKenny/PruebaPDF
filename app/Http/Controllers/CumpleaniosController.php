<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class CumpleaniosController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('cumpleanios');
    	return $pdf->download('Cumpleanios.pdf');
    }
}
