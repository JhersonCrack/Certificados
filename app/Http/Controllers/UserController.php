<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function users(){
        $usuarios = User::all();
        return view('viewUsers', compact('usuarios'));
    }
}
