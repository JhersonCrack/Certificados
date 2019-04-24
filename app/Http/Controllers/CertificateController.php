<?php
namespace App\Http\Controllers;
use     Illuminate\Http\Request;
use App\Certificate;

class CertificateController extends Controller{
    public  function certificates(Request $request){
        $name = $request->get('name');
        $dni  = $request->get('dni');
        $cip  = $request->get('cip');

        $certificados = Certificate::
            with('user')
            ->find(1)
            ->with('course')
            ->find(1)
            ->with('type')
            ->find(1)
            ->orderBy('id', 'ASC')
            ->name($name)
            ->dni($dni)
            ->cip($cip)
            ->paginate(5);

        return view('viewCertificates', compact('certificados'));
    }
}
//Código de Benjamin
//        $nombres = Certificate::with('course') -> find(1);
//        return view('viewCertificates', compact('nombres'));