<?php
namespace App\Http\Controllers;
use App\Temary;
use Illuminate\Http\Request;

class TemaryController extends Controller{
    public function temaries(){
        $temas = Temary::all();
        return view('viewTemaries', compact('temas'));
    }
}