<?php

namespace App\Http\Controllers;

use App\modelCourses;
use Illuminate\Http\Request;

class coursesController extends Controller
{
    public  function courses(){
        $cursos = modelCourses::all();
        return view('viewCourses', compact('cursos'));
    }
}
