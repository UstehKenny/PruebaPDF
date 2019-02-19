<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class InstructoresController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('instructores');
    	return $pdf->download('Instructores.pdf');
    }
}
