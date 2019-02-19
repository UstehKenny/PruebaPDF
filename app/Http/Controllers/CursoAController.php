<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class CursoAController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('cursoa');
    	return $pdf->download('CursoAcreditado.pdf');
    }
}
