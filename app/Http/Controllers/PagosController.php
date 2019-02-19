<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PagosController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('pagos');
    	return $pdf->download('Pagos.pdf');
    }
}
