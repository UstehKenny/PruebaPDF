<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class CoordGeneral2Controller extends Controller
{
    public function pdf(){
        //Se establece la orientacion del papel con el comando de setPaper->landscape(horizontal)
    	$pdf = PDF::loadView('coordgeneral2')->setPaper('a4','landscape');
    	return $pdf->download('Coordinación General2.pdf');
    }
}
