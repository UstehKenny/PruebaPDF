<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class ConcentradoController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('concentrado');
    	return $pdf->download('Concentrado.pdf');
    }
}
