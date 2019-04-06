<?php

namespace App\Http\Controllers;

use App\modelConsultas;
use Illuminate\Http\Request;

class consultasController extends Controller
{
    public function consultas(){
        $consultas = modelConsultas::all();
        return view('viewConsultas', compact($consultas));
    }
}
