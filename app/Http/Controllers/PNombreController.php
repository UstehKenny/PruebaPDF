<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PNombreController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('pnombre');
    	return $pdf->download('PorNombre.pdf');
    }
}
