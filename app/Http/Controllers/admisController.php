<?php

namespace App\Http\Controllers;

use App\modelAdmis;
use Illuminate\Http\Request;

class admisController extends Controller
{
    public function admis(){
        $administradores = modelAdmis::all();
        return view('viewAdmis', compact('administradores'));
    }
}
