<?php
namespace App\Http\Controllers;
use     Illuminate\Http\Request;
use App\Certificate;

class CertificateController extends Controller{
    public  function certificates(/*Request $request*/){
        // $name = $request->get('name');
        // $dni  = $request->get('dni');
        // $cip  = $request->get('cip');

        $certificados = Certificate::all();
       
        /**BILLS**/
            // with('user')
            // ->find(1)
            // ->with('course')
            // ->find(1)
            // ->with('type')
            // ->find(1)
            // ->orderBy('id', 'ASC')
            // ->name($name)
            // ->dni($dni)
            // ->cip($cip)
            // ->paginate(5);

        /** para que puedas ver los parametros comenta la vista y descomenta el retunr **/
             /** "curso_name","user_name","user_dni","user_cip","type_name" **/
            //return $certificados;
            return view('viewCertificates', compact('certificados'));
       
    }

    /** Busqueda solo codigo Agregar ... mas busquedas**/
    public function searchCodigo(Request $request)
    { 
        /** "user_cip" **/ 
        $busqueda = $request->get('search');
        //return $busqueda;
        $certificados = Certificate::all()->where('user_cip',$busqueda);
        return view('viewCertificates', compact('certificados'));
        
    }
}
//Código de Benjamin
//        $nombres = Certificate::with('course') -> find(1);
//        return view('viewCertificates', compact('nombres'));