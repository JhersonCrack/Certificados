<?php

namespace App\Http\Controllers;
use App\Certificate;

class CertificateController extends Controller
{
    public  function certificates(){
        $certificados = Certificate::with('Course') -> find(1);

        return view('viewCertificates', compact('certificados'));
    }
}
