<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class SADdirectorController extends Controller
{
    public function pdf(){
        //Se establece la orientacion del papel con el comando de setPaper->landscape(horizontal)
    	$pdf = PDF::loadView('saddirector')->setPaper('a4','landscape');
    	return $pdf->download('SAD y director.pdf');
    }
}
