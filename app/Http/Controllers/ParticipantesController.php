<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class ParticipantesController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('participantes');
    	return $pdf->download('Participantes.pdf');
    }
}
