@extends('admin.master')

@section('title')
about me
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage your about info   
                    <b class="text-success"> {{Session::get('message')}}</b>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light table-bordered">
                        <thead>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Your short description</th>
                            <th>Your long description</th>
                            <th>Your birth date</th>
                            <th>Your birth location</th>
                            <th>Your languages</th>
                            <th>Picture</th>
                            <th>Publication status</th>
                            <th>Action</th>
                        </thead>
                        @foreach($abouts as $about)
                        <tbody>
                            <th>{{$about->name}}</th>
                            <th>{{$about->title}}</th>
                            <th>{{$about->short_description}}</th>
                            <th>{!! $about->long_description !!}</th>
                            <th>{{$about->date_of_birth}}</th>
                            <th>{{$about->birth_location}}</th>
                            <th>{{$about->languages}}</th>
                            <th><img src="{{asset($about->profile_pic)}}" class="img-responsive"></th>
                            <th>
                                {{$about->publication_status==1?'Published':'Unpublished'}}
                            </th>
                            <th>
                                @if($about->publication_status==1)
                                <a href="{{route('unpublish-about-info',['id'=>$about->id])}}" class="btn btn-warning btn-xs" title="Unpublish info"><span class="fa fa-arrow-up"></span></a>
                                @else
                                <a href="{{route('publish-about-info',['id'=>$about->id])}}" class="btn btn-danger btn-xs" title="Publish info"><span class="fa fa-arrow-down"></span></a>
                                @endif
                                <a href="{{route('delete-about-info',['id'=>$about->id])}}" class="btn btn-danger btn-xs" title="Delete info"><span class="fa fa-trash"></span></a>
                                
                                <a href="{{route('edit-about-info',['id'=>$about->id])}}" class="btn btn-info btn-xs" title="Edit info"><span class="fa fa-edit"></span></a>
                            </th>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
