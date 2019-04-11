<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdmiController extends Controller
{
    public function admis(){
        $administradores = Admin::all();
        return view('viewAdmis', compact('administradores'));
    }
}
