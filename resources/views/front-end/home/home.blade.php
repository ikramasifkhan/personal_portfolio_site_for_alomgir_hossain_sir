@extends('front-end.master')
@section('title')
Home
@endsection

@section('body')
<div class="container main">
    <div class="main_content">
        <div class="main_content_overlay">
            <div class="row">
                <div class="col-1 page_number">1</div>
            </div>
            @foreach($abouts as $about)
            <div class="row pl-0 my_introduction">
                <div class="col-12 pl-0">
                    <h1 class="page_title" id="home_page_title">Hi I am <strong>{{$about->name}}</strong></h1>
                    <h3 class="page_subtitle" id="home_page_subtitle">I am a {{$about->title}}</h3>
                </div>

                <div class="col-6 pl-0  about_me_introduction">{{$about->short_description}}</div>
                <div class="col-6"></div>
                <a href="{{route('about-me')}}" class="btn btn-danger my_button">Read more</a>
            </div>
            @endforeach
            <div class="row my_services">
                <div class="col-12 pl-0">
                    <h3 class="section_title">My services</h3>
                </div>
                <div class="clearfix"></div>
                @foreach($courses as $course)
                <div class="col-md-4 col-xl-4 col-lg-4 my_service_content">
                    <div class="card my_card">
                        <img class="card-img-top" src="{{asset($course->course_pic)}}" alt="{{$course->name}}">
                        <div class="card-body">
                            <h3 class="card-title">{{$course->name}}</h3>
                            <p class="card-text">{{$course->short_description}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('course-info',['id'=>$course->id])}}" class="btn btn-danger my_button">View  details</a>
                            <a href="{{route('course-schedule',['id'=>$course->id])}}" class="btn btn-danger my_button float-right">View  schedule</a>
                        </div>
                    </div>
                </div>
            @endforeach
                
            </div>
        </div>
    </div>
</div>
@endsection
