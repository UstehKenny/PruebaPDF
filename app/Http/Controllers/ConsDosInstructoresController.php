<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class ConsDosInstructoresController extends Controller
{
    public function pdf(){
        //Se establece la orientacion del papel con el comando de setPaper->landscape(horizontal)
    	$pdf = PDF::loadView('consdosinstructores')->setPaper('a4','landscape');
    	return $pdf->download('ConstanciaDosInstructores.pdf');
    }
}
