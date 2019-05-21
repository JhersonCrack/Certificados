<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public  function courses(){
        $cursos = Course::all();
        return view('courses.create', compact('cursos'));
    }
}
