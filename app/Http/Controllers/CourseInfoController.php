<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Image;

class CourseInfoController extends Controller {

    public function index() {
        return view('admin.course.AddCourse');
    }

    protected function validation($request) {
        $request->validate([
            'page_number'=>'required|max:3',
            'name' => 'required',
            'code' => 'required',
            'credit_hours' => 'required|numeric',
            'pre_request' => 'required',
            'consult_hour' => 'required',
            'book_name' => 'required',
            'course_objective' => 'required',
            'short_description' => 'required|max:200',
            'long_description' => 'required',
            'first_term' => 'required|numeric|min:1|max:100',
            'mid_term' => 'required|numeric|min:1|max:100',
            'final' => 'required|numeric|min:1|max:100',
            'ohter_mark' => 'required|numeric|min:1|max:100',
            'course_pic' => 'image',
        ]);
    }

    protected function courseImage($request) {
        $CourseImage = $request->file('course_pic');
        $fileType = $CourseImage->getClientOriginalExtension();
        $fileName = $request->name . '.' . $fileType;
        $directory = 'course_image/';
        $ImageUrl = $directory . $fileName;
        Image::make($CourseImage)->save($ImageUrl);

        return $ImageUrl;
    }

    protected function courseInfo($request, $ImageUrl) {

        $courses = new Course();

        $courses->page_number = $request->page_number;
        $courses->name = $request->name;
        $courses->code = $request->code;
        $courses->credit_hours = $request->credit_hours;
        $courses->pre_request = $request->pre_request;
        $courses->consult_hour = $request->consult_hour;
        $courses->book_name = $request->book_name;
        $courses->course_objective = $request->course_objective;
        $courses->short_description = $request->short_description;
        $courses->long_description = $request->long_description;
        $courses->first_term = $request->first_term;
        $courses->mid_term = $request->mid_term;
        $courses->final = $request->final;
        $courses->ohter_mark = $request->ohter_mark;
        $courses->course_pic = $ImageUrl;
        $courses->publication_status = $request->publication_status;

        $courses->save();
    }

    public function SaveCourseInfo(Request $request) {
        
        $this->validation($request);
        $ImageUrl = $this->courseImage($request);
        $this->courseInfo($request, $ImageUrl);

        return redirect('/course/add')->with('message','Course info saved successfully');
    }
    
    public function ShowCourseInfo(){
        $courses= Course::all();
        return view('admin.course.ManageCourseInfo',[
            'courses'=>$courses
        ]);
    }
    
    public function DetailsCourseInfo($id){
        $course=Course::find($id);
        return view('admin.course.CourseDetailsInfo',[
            'course'=>$course
        ]);
    }
    
    public function UnpublishCourseInfo($id){
        $course=Course::find($id);
        
        $course->publication_status=0;
        $course->save();
        
        return redirect('/course/manage')->with('message','Unpublished info saved successfully');
    }
    
    public function PublishCourseInfo($id){
        $course=Course::find($id);
        
        $course->publication_status=1;
        $course->save();
        
        return redirect('/course/manage')->with('message','Published info saved successfully');
    }
    
    public function DeleteCourseInfo($id){
        $course=Course::find($id);
        
        $course->delete();
        return redirect('/course/manage')->with('message','Delete info saved successfully');
    }
    
    public function EditCourseInfo($id){
        $course=Course::find($id);
        return view('admin.course.EditCourseInfo',[
            'course'=>$course
        ]);
    }
    
    protected function CourseBasicInfo($request, $course, $ImageUrl=null){
        $course->page_number = $request->page_number;
        $course->name = $request->name;
        $course->code = $request->code;
        $course->credit_hours = $request->credit_hours;
        $course->pre_request = $request->pre_request;
        $course->consult_hour = $request->consult_hour;
        $course->book_name = $request->book_name;
        $course->course_objective = $request->course_objective;
        $course->short_description = $request->short_description;
        $course->long_description = $request->long_description;
        $course->first_term = $request->first_term;
        $course->mid_term = $request->mid_term;
        $course->final = $request->final;
        $course->ohter_mark = $request->ohter_mark;
        if($ImageUrl){
            $course->course_pic = $ImageUrl;
        }
        $course->publication_status = $request->publication_status;

        $course->save();
    }

        public function UpdateCourseInfo(Request $request){
        $course=Course::find($request->course_id);
        $course_pic=$request->file('course_pic');
        $this->validation($request);
        if($course_pic){
            unlink($course->course_pic);
            $ImageUrl= $this->courseImage($request);
            $this->CourseBasicInfo($request, $course, $ImageUrl);
        }else{
            $this->CourseBasicInfo($request, $course);
        }
        return redirect('/course/manage')->with('message', 'Info update successfully');
        
    }
}
