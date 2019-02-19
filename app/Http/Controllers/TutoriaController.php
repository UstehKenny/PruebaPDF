<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class TutoriaController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('tutoria');
    	return $pdf->download('Tutoria.pdf');
    }
}
