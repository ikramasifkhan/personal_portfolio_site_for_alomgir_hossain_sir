<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseSchedule;
use App\Course;
use DB;

class CourseScheduleController extends Controller {

    public function index() {
        $courses = Course::where('publication_status',1)->get();
        return view('admin.CourseSchedule.AddCourseSchedule', [
            'courses' => $courses
        ]);
    }

    protected function validation($request) {
        $request->validate([
            'schedule_date' => 'course_id',
            'schedule_date' => 'required',
            'schedule_day' => 'required',
            'discussion_topic'=>'required',
            'file_name'=>'required',
            'lecture_file'=>'required|mimetypes:pdf',
        ]);
    }

    protected function FileInfo($request) {
        $LectureFile = $request->file('lecture_file');
        $FileType = $LectureFile->getClientOriginalExtension();
        $FileName = $request->file_name. '.' . $FileType;
        $directory = 'course_image/';
        $ImageUrl = $directory . $FileName;
        $LectureFile->move($directory, $FileName);

        return $ImageUrl;
    }

    protected function SaveCourseScheduleBasicInfo($request, $courseSchedule, $ImageUrl = null) {
        $courseSchedule->course_id = $request->course_id;
        $courseSchedule->schedule_date = $request->schedule_date;
        $courseSchedule->schedule_day = $request->schedule_day;
        $courseSchedule->discussion_topic = $request->discussion_topic;
        $courseSchedule->file_name = $request->file_name;
        $courseSchedule->lecture_file = $ImageUrl;
        $courseSchedule->publication_status = $request->publication_status;

        $courseSchedule->save();
    }

    public function SaveCourseSchedule(Request $request) {
        $courseSchedule = new CourseSchedule();

        $ImageUrl = $this->FileInfo($request);

        $this->SaveCourseScheduleBasicInfo($request, $courseSchedule, $ImageUrl);

        return redirect('course/schedule/add')->with('message', 'Info saved successfully');
    }
    
    public function ManageCourseScheduleInfo(){
        $courseSchedules= DB::table('course_schedules')
                                                    ->join('courses','course_schedules.course_id','=','courses.id')
                                                      ->select('course_schedules.*','courses.name')
                                                      ->get();
        
        return view('admin.CourseSchedule.ManageCourseSchedule',[
            'courseSchedules'=>$courseSchedules
        ]);
    }

}
