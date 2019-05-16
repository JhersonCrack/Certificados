<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Certificate;

class CertificateController extends Controller{
    public  function welcome(){
        $certificados = Certificate::all();
            return view('welcome', compact('certificados'));
    }
    /** Busqueda solo codigo Agregar ... mas busquedas**/
    public function searchCodigo(Request $request){
        /** "user_cip" **/ 
        $busqueda = $request->get('search');
        $certificados = Certificate::all()->where('user_cip',$busqueda);
        return view('viewCertificates', compact('certificados'));
    }
}





//Código de Benjamin
//        $nombres = Certificate::with('course') -> find(1);
//        return view('viewCertificates', compact('nombres'));