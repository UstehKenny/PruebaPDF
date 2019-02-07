<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PruebaControlles extends Controller
{
    //Funcion para crear PDFS
    public function fun_pdf(){
    	$pdf = PDF::loadView('prueba');
    	return $pdf->download('hola.pdf');
    }
}
