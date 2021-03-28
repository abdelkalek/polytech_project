<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
public function test($x,$y)
{
    $resultat = $x +$y ;
    return view('test',[
        'x'=> $x,
        'y'=> $y,
        'resultat' => $resultat
    ]);
}
}
