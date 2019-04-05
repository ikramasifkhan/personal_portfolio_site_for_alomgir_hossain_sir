<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        
        return view('front-end.course.course');
    }
    
    public function CourseSchedule(){
        return view('front-end.course.courseSchedule');
    }
}
