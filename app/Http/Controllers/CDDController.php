<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class CDDController extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('cdd');
    	return $pdf->download('CDD.pdf');
    }
}
