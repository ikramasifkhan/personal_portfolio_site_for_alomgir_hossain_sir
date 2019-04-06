@extends('front-end.master')

@section('title')
project details
@endsection

@section('body')
<div class="container main">
    <div class="main_content">
        <div class="main_content_overlay">
            <div class="row">
                <div class="col-2 page_number">{{$project->page_number}}</div>
            </div>
            <div class="row project_details" style="margin-bottom: 30px; margin-top: 30px;">
                <div class="col-12 px-0">
                    <div class="row project_page_content" style="margin-bottom: 20px">
                        <div class="col-12 project_page_content_title text-center" style="margin-bottom: 10px; font-family: 'Open Sans', sans-serif; font-weight: 700"><b>Project name</b>: {{$project->name}}</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row project_page_content" style="margin-bottom: 20px">
                        <div class="col-12 project_page_content_title text-center" style="margin-bottom: 10px; font-family: 'Open Sans', sans-serif; font-weight: 700"><b>Project objective</b></div>
                        <div class="col-12 project_page_content_text" style="font-family: 'Open Sans', sans-serif; font-weight: 400">
                            <p>{{$project->project_objective}}</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row project_page_content" style="margin-bottom: 20px">
                        <div class="col-12 project_page_content_title text-center" style="margin-bottom: 10px; font-family: 'Open Sans', sans-serif; font-weight: 700"><b>Project description</b></div>
                        <div class="col-12 project_page_content_text" style="font-family: 'Open Sans', sans-serif; font-weight: 400">
                            <p>{!! $project->long_description !!}</p>
                        </div>
                    </div>

                    <div class="row project_page_content" style="margin-bottom: 20px">
                        <div class="col-12 project_page_content_title text-center" style="margin-bottom: 10px; font-family: 'Open Sans', sans-serif; font-weight: 700"><b>Outcome and expected result</b></div>
                        <div class="col-12 project_page_content_text" style="font-family: 'Open Sans', sans-serif; font-weight: 400">
                            <p>{{$project->project_outcome}}</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-2 pl-0 offset-5 course_page_btn">
                        <a href="{{route('/')}}" class="btn btn-danger my_button">Goto home page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection