<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Certificate;

class HomeController extends Controller
{
    /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $certificados = Certificate::all();
        return view('viewCertificates', compact('certificados'));
    }
}
