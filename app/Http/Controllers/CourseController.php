<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //コースページのコントローラー
    public function index(Request $request)
    {
        return view('course/index');
    }
}
