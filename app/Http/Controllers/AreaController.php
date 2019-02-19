<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class AreaController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('area');
    	return $pdf->download('area.pdf');
    }
}
