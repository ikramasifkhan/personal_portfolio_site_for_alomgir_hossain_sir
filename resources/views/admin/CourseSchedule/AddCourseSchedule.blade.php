@extends('admin.master')

@section('title')
course schedule
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add course schedule info
                            <span class="text-success">{{Session::get('message')}}</span>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="{{route('save-course-schedule')}}" enctype="multipart/form-data" name="course_schedule_form">
                                    @csrf
                                     <div class="form-group">
                                        <label for="name">Course name</label>
                                        <select class="form-control" id="name" name="course_id">
                                            <option>=============Select your course name==============</option>
                                            @foreach($courses as $course)
                                            <option value="{{$course->id}}">{{$course->name}}</option>
                                            @endforeach
                                        </select>
                                        <span><b class="text-danger">{{$errors->has('course_id')?$errors->first('course_id') :''}}</b></span>
                                     </div>
                                    
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" id="date" placeholder="Select a date" name="schedule_date" required>
                                        <span><b class="text-danger">{{$errors->has('schedule_date')?$errors->first('schedule_date'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="day">Day</label>
                                        <input type="text" class="form-control" id="day" placeholder="Input day" name="schedule_day" required>
                                        <span><b class="text-danger">{{$errors->has('schedule_day')?$errors->first('schedule_day'): ''}}</b></span>
                                    </div>
                                    
                                   
                                    
                                    <div class="form-group">
                                        <label for="topic">Discussion topics</label>
                                        <textarea id="topic" name="discussion_topic" class="form-control"  required></textarea>
                                        <span><b class="text-danger">{{$errors->has('discussion_topic')?$errors->first('discussion_topic'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="day">File name</label>
                                        <input type="text" class="form-control" id="day" placeholder="Inter your file name" name="file_name" required>
                                        <span><b class="text-danger">{{$errors->has('file_name')?$errors->first('file_name'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputFile">Additional file</label>
                                        <input type="file" id="exampleInputFile" name="lecture_file" required>
                                        <span><b class="text-danger">{{$errors->has('lecture_file')?$errors->first('lecture_file'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Publication status</label>
                                        <input type="radio" name="publication_status"  value="1" checked >Published
                                        <input type="radio" name="publication_status"  value="0">Unpublished
                                    </div>

                                    <input type="submit" class="btn btn-info" name="btn" value="Save Info">
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</section>

<script>
document.forms['course_schedule_form'].elements['course_id'].value="{{$course->id}}";
</script>
@endsection