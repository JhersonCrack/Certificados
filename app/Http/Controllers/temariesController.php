<?php

namespace App\Http\Controllers;

use App\modelTemaries;
use Illuminate\Http\Request;

class temariesController extends Controller
{
    public function temaries(){
        $temas = modelTemaries::all();
        return view('viewTemaries', compact('temas'));
    }
}
