<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function index(Request $request)
    {
        $defNum=$request->input('number');
         return $defNum;

    }

}
/*pow(mixed $num, mixed $exponent): int|float|object*/


//$r = 2; 
//$a = $r*$r*3.14;