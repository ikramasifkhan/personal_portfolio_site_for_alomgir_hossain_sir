@extends('front-end.master')
@section('title')
resume
@endsection

@section('body')
<div class="container resume">
    <div class="row">
        <div class="col-1 page_number pl-0">3</div>
    </div>

    <div class="row">
        <div class="col-1 page_title pl-0">Resume</div>
    </div>

    <div class="row resume_education">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 pl-0"><h3 class="resume_heading">Education</h3></div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-0 pr-0">
            <div class="row resume_row">
                @foreach($educations as $education)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  resume_content ">
                    <p><b class="resume_year point">{{$education->starting_year}} - {{$education->finishing_year}}</b></p>
                    <p><b>{{$education->institute_name}}</b></p>
                    <p>{{$education->short_description}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row resume_experience">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 pl-0"><h3 class="resume_heading">Experience</h3></div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-0 pr-0">
            <div class="row resume_row">
                @foreach($experiences as $experience)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 resume_content ">
                    <p><b class="resume_year point">{{$experience->starting_year}} - {{$experience->finishing_year}}</b></p>
                    <p><b>{{$experience->institute_name}}</b></p>
                    <p>{{$experience->short_description}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
