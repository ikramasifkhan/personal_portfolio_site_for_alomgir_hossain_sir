@extends('front-end.master')
@section('title')
course
@endsection
@section('body')
<div class="container main">
    <div class="main_content">
        <div class="main_content_overlay">
            <div class="row">
                <div class="col-2 page_number">{{$course->page_number}}</div>
            </div>
            <div class="row course_page">
                <div class="col-12 px-0">
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Course name</b></div>
                        <div class="col-10 course_page_content_text">{{$course->name}}</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Course code</b></div>
                        <div class="col-10 course_page_content_text">{{$course->code}}</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Credit hours</b></div>
                        <div class="col-10 course_page_content_text">{{$course->credit_hours}}</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Pre request </b></div>
                        <div class="col-10 course_page_content_text">{{$course->pre_request}}</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Consulting hours </b></div>
                        <div class="col-10 course_page_content_text">{{$course->consult_hour}}</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Test book name </b></div>
                        <div class="col-10 course_page_content_text">{{$course->book_name}} </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title mark_title"><b>Mark distribution </b></div>
                        <div class="col-10">
                            <table class="table table-responsive">
                                <tr>
                                    <th>First term</th>
                                    <td>{{$course->first_term}} %</td>
                                </tr>
                                <tr>
                                    <th>Mid term</th>
                                    <td>{{$course->mid_term}} %</td>
                                </tr>
                                <tr>
                                    <th>Final term</th>
                                    <td>{{$course->final}} %</td>
                                </tr>
                                
                                <tr>
                                    <th>Others</th>
                                    <td>{{$course->ohter_mark}} %</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Course objective</b></div>
                        <div class="col-10 course_page_content_text">
                            <p>{{$course->course_objective}}</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Course description</b></div>
                        <div class="col-10 course_page_content_text">
                            {!! $course->long_description !!}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-2 pl-0 offset-5 course_page_btn">
                        <a href="{{route('course-schedule',['id'=>$course->id])}}" class="btn btn-danger my_button">View day by day course schedule</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
