@extends('front-end.master')
@section('title')
course schedule
@endsection

@section('body')
<div class="container main">
    <div class="main_content">
        <div class="main_content_overlay">
            <div class="row">
                <div class="col-3 page_number">1.1.2</div>
            </div>

            <div class="row course_schedule">
                <div class="col-12 px-0">
                    <table class="table table-responsive-sm table-bordered">
                        <tr>
                            <th>Date</th>
                            <th>Day</th>
                            <th>Topic will be covered</th>
                            <th>Additional file</th>
                        </tr>
                        @foreach($courseSchedules as $courseSchedule)
                        <tr>
                            <td>{{$courseSchedule->schedule_date}}</td>
                            <td>{{$courseSchedule->schedule_day}}</td>
                            <td><p>{!! $courseSchedule->discussion_topic !!}</p></td>
                            <td><a style="color:#fd4d4d; font-family: 'Open Sans', sans-serif; text-decoration: none" href="{{url('/course/schedule/')}}" download="{{$courseSchedule->lecture_file}}">{{$courseSchedule->file_name}} <span class="fa fa-download" title="Download now"></span></a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection