<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class ConsUnInstructorController extends Controller
{
    public function pdf(){
        //Se establece la orientacion del papel con el comando de setPaper->landscape(horizontal)
    	$pdf = PDF::loadView('consuninstructor')->setPaper('a4','landscape');
    	return $pdf->download('ConstanciaUnInstructor.pdf');
    }
}
