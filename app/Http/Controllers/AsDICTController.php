<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class AsDICTController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('asdict');
    	return $pdf->download('AsistenciaDICT.pdf');
    }
}
