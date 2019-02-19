<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class ValidacionController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('validacion');
    	return $pdf->download('Validacion.pdf');
    }
}
