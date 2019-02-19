<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class CatalogoController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('catalogo');
    	return $pdf->download('CatalogoCursos.pdf');
    }
}
