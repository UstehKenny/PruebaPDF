<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ConsInstructorController extends Controller
{
    public function pdf(){
        //Se establece la orientacion del papel con el comando de setPaper->landscape(horizontal)
    	$pdf = PDF::loadView('consinstructor')->setPaper('a4','landscape');
    	return $pdf->download('ConstanciaInstructor.pdf');
    }
}
