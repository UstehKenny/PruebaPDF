<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class ResumenInscritosController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('resumeninscritos');
    	return $pdf->download('ResumenInscritos.pdf');
    }
}
