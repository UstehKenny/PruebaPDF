<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class RegistradosController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('registrados');
    	return $pdf->download('Registrados.pdf');
    }
}
