<?php
namespace App\Http\Controllers;
use App\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller{
    public  function welcome(){
        $certificados = Certificate::all();
        return view('welcome', compact('certificados'));
    }
    public function searchCodigo (Request $request){
        $busqueda = $request->get('search');
        $certificados = Certificate::all()->where('user_cip',$busqueda);
        return view('home', compact('certificados'));
    }
}
