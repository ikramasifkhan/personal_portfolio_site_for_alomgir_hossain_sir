@extends('front-end.master')
@section('title')
recent work
@endsection

@section('body')
<div class="container recent_work">
    <div class="row">
        <div class="col-1 pl-0 page_number">4</div>
    </div>

    <div class="row">
        <div class="col-12 page_title pl-0">Recent work </div>
    </div>

    <div class="row">
        <div class="col-12 px-0">
            <div class="grid">
                @foreach($projects as $project)
                <div class="element-item  col-md-4 laravel_project">
                    <div class="card my_card">
                        <img class="card-img-top" src="{{asset($project->course_pic)}}" alt="{{$project->name}}">
                        <div class="card-body">
                            <h3 class="card-title">{{$project->name}}</h3>
                            <p class="card-text">{{$project->short_description}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="course_details.html" class="btn btn-danger my_button">View  details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

