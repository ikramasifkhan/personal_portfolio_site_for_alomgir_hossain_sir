<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\CourseSchedule;

class CourseController extends Controller
{
    public function index($id){
        $course= Course::find($id);
        return view('front-end.course.course',[
            'course'=>$course
        ]);
    }
    
    public function CourseSchedule($id){
        $course= Course::find($id);
        $courseSchedules= CourseSchedule::where('course_id',$course->id)->get();
        return view('front-end.course.courseSchedule',[
            'courseSchedules'=>$courseSchedules
        ]);
    }
}
