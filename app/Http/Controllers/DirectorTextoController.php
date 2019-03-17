<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Profesor;
class DirectorTextoController extends Controller
{
    public function pdf(){
        //$nombre = "Carolina";
        //$nomnbre = Profesor::where();
        //Se establece la orientacion del papel con el comando de setPaper->landscape(horizontal)
    	$pdf = PDF::loadView('directortexto',["nombre"=>$nombre])->setPaper('a4','landscape');
    	return $pdf->download('Director Texto.pdf');
    }
}
