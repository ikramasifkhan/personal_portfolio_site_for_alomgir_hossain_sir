<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseSchedule;
use App\Course;
use DB;

class CourseScheduleController extends Controller {

    public function index() {
        $courses = Course::where('publication_status', 1)->get();
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
            'file_name' => 'required',
        ]);
    }

    protected function FileInfo($request) {
        $LectureFile = $request->file('lecture_file');
        $FileType = $LectureFile->getClientOriginalExtension();
        $FileName = $request->file_name . '.' . $FileType;
        $directory = 'course_image/';
        $ImageUrl = $directory . $FileName;
        $LectureFile->move($directory, $FileName);

        return $ImageUrl;
    }

    protected function CourseScheduleBasicInfo($request, $courseSchedule, $ImageUrl = null) {
        $courseSchedule->course_id = $request->course_id;
        $courseSchedule->schedule_date = $request->schedule_date;
        $courseSchedule->schedule_day = $request->schedule_day;
        $courseSchedule->discussion_topic = $request->discussion_topic;
        $courseSchedule->file_name = $request->file_name;
        if ($ImageUrl) {
            $courseSchedule->lecture_file = $ImageUrl;
        }
        $courseSchedule->publication_status = $request->publication_status;

        $courseSchedule->save();
    }

    public function SaveCourseSchedule(Request $request) {
        $courseSchedule = new CourseSchedule();

        $ImageUrl = $this->FileInfo($request);

        $this->CourseScheduleBasicInfo($request, $courseSchedule, $ImageUrl);

        return redirect('course/schedule/add')->with('message', 'Info saved successfully');
    }

    public function ManageCourseScheduleInfo() {
        $courseSchedules = DB::table('course_schedules')
                ->join('courses', 'course_schedules.course_id', '=', 'courses.id')
                ->select('course_schedules.*', 'courses.name')
                ->get();

        return view('admin.CourseSchedule.ManageCourseSchedule', [
            'courseSchedules' => $courseSchedules
        ]);
    }

    public function UnpublishCourseScheduleInfo($id) {
        $CourseSchedule = CourseSchedule::find($id);
        $CourseSchedule->publication_status = 0;
        $CourseSchedule->save();

        return redirect('course/schedule/manage')->with('message', 'Unpublished successful');
    }

    public function PublishCourseScheduleInfo($id) {
        $CourseSchedule = CourseSchedule::find($id);
        $CourseSchedule->publication_status = 1;
        $CourseSchedule->save();

        return redirect('course/schedule/manage')->with('message', 'Published successful');
    }

    public function EditCourseScheduleInfo($id) {
        $CourseSchedule = CourseSchedule::find($id);
        $courses = Course::where('publication_status', 1)->get();

        return view('admin.CourseSchedule.EditCourseSchedule', [
            'CourseSchedule' => $CourseSchedule,
            'courses' => $courses
        ]);
    }

    public function UpdateCourseScheduleInfo(Request $request) {
        $courseSchedule = CourseSchedule::find($request->schedule_id);
        $LectureFile = $request->file('lecture_file');
        $this->validation($request);

        if ($LectureFile) {
            unlink($courseSchedule->lecture_file);

            $ImageUrl = $this->FileInfo($request);
            $this->CourseScheduleBasicInfo($request, $courseSchedule, $ImageUrl);
        } else {
            $this->CourseScheduleBasicInfo($request, $courseSchedule);
        }
        return redirect('course/schedule/manage')->with('message', 'Update info save successful');
    }
    public function DeleteCourseScheduleInfo($id){
        $CourseSchedule= CourseSchedule::find($id);
        $CourseSchedule->delete();
         return redirect('course/schedule/manage')->with('message', 'Delete info  successfully');
    }
}
