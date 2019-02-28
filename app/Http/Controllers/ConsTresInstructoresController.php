<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class ConsTresInstructoresController extends Controller
{
    public function pdf(){
        //Se establece la orientacion del papel con el comando de setPaper->landscape(horizontal)
    	$pdf = PDF::loadView('constresinstructor')->setPaper('a4','landscape');
    	return $pdf->download('ConstanciaTresInstructores.pdf');
    }
}
