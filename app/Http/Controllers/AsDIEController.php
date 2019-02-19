<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class AsDIEController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('asdie');
    	return $pdf->download('AsistenciaDIE.pdf');
    }
}
