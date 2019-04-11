<?php

namespace App\Http\Controllers;
use App\Certificate;

class CertificateController extends Controller{
    public  function certificates(){
        $nombres = Certificate::with('course') -> find(1);
       // return view('viewCertificates', compact('nombres'));
       return $nombres;
    }
}
