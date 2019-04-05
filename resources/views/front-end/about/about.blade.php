@extends('front-end.master')
@section('title')
About
@endsection

@section('body')
<div class="container about_me">
    <div class="row">
        <div class="col-1 pl-0 page_number">2</div>
    </div>
    <div class="row">
        <div class="col-12 page_title pl-0">About me</div>
    </div>

    <div class="row">
        @foreach($abouts as $about)
        <div class="col-xl-6 col-lg-6 col-md-6 pl-0">
            <img src="{{asset($about->profile_pic)}}" alt="{{$about->name}}" class="img-fluid img-thumbnail">
            <div class="personal_infomation">
                <h3>Personal information</h3>
                <p><strong>Name:</strong> {{$about->name}}</p>
                <p><strong>Birth date : </strong> {{$about->date_of_birth}} </p>
                <p><strong>Nationality:</strong> Bangladeshi</p>
                <p><strong>Born:</strong> {{$about->birth_location}} </p>
                <p><strong>Religion:</strong>Islam</p>
                <p><strong>Language: </strong>{{$about->languages}}</p>
            </div>
        </div>
        @endforeach
        <div class="col-xl-6 col-lg-6 col-md-6 pr-0 about_me_content">
            @foreach($abouts as $about)
            <div>
                <h3 class="">{{$about->name}}</h3>
                <p>{!! $about->long_description !!}</p>
            </div>
            @endforeach
            
            <h3 class="tecnical_skill">TECHNICAL SKILLS</h3>
            @foreach($skills as $skill)
            <div class="progress mt-0">
                <div class="progress-bar my_progress_bar progress-bar-animated" role="progressbar" style="width: {{$skill->skill_amount}}% ;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$skill->skill_name}} ({{$skill->skill_amount}}%)</div>
            </div>
            @endforeach
            <h3 class="about_me_services">Services</h3>
            <ul>
                @foreach($services as $service)
                <li class="pt-0"><strong>{{$service->service_name}}</strong><br>{{$service->service_description}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection

