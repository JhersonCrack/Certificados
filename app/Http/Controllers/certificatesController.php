<?php

namespace App\Http\Controllers;

use App\modelCertificates;
use Illuminate\Http\Request;

class certificatesController extends Controller
{
    public  function certificates(){
        //$certificados
        //$certificados = modelCertificates::all();
        //return view('viewCertificates', compact('certificados'));
        return modelCertificates::all();
    }
}
