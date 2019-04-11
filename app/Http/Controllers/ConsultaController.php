<?php

namespace App\Http\Controllers;

use App\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function consults(){
        $consultas = Consulta::all();
        return view('viewConsultas', compact('consultas'));
    }
}