<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Zipper;

class ZIPController extends Controller
{
    public function downloadZip(){
        $files = glob(public_path('img/*'));
        Zipper::make(public_path('mytest3.zip'))->add($files)->close();
        return response()->download(public_path('mytest3.zip'));
 }
}
