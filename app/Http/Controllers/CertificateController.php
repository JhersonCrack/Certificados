<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Certificate;

class CertificateController extends Controller{
    public  function welcome(){
        $certificados = Certificate::all();
            return view('welcome', compact('certificados'));
    }

    // Busqueda solo codigo Agregar ... mas busquedas
    public function searchCodigo(Request $request){
        /** "user_cip" **/ 
        $busqueda = $request->get('search');
        $certificados = Certificate::all()->where('user_cip',$busqueda);
        return view('viewCertificates', compact('certificados'));
    }

    //vista crud create certificates
    public function create(){
        return view('certificates.create');
    }

    //vista de nose que hace, help here
    public function store(Request $request)    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success','Product created successfully.');
    }

    //vista que muestra los certificados
    public function show(Product $product){
        return view('products.show',compact('product'));
    }

    //vista crud edit certificates
    public function edit(Product $product)    {
        return view('products.edit',compact('product'));
    }

    //vista crud actualizar certificado
    public function update(Request $request, Product $product){
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success','Product updated successfully');
    }

    //destruir certificado
    public function destroy(Product $product)    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success','Product deleted successfully');
    }
}





//Código de Benjamin
//        $nombres = Certificate::with('course') -> find(1);
//        return view('viewCertificates', compact('nombres'));