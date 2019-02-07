<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class BaseDatosController extends Controller
{
    //
    public function index(){
        $personas = Nombres::all();
        $personas = Nombres::get();
        return view('basedatos.index')->with('personas',$personas);
    }

    public function pdf(){
        //Se establece la orientacion del papel con el comando de setPaper->landscape(horizontal)
    	$pdf = PDF::loadView('base')->setPaper('a4','landscape');
    	return $pdf->download('informacion.pdf');
    }
}
