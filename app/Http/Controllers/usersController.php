<?php

namespace App\Http\Controllers;

use App\modelUsers;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public  function users(){
        $usuarios = modelUsers::all();
        return view('viewUsers', compact('usuarios'));
    }
}
