@extends('admin.master')

@section('title')
project 
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage your project info   
                    <b class="text-success"> {{Session::get('message')}}</b>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light table-bordered">
                        <thead>
                        <th>Page number</th>
                        <th>Project name</th>
                        <th>Project objective</th>
                        <th>Short description</th>
                        <th>Long description</th>
                        <th>Project outcome</th>
                        <th> Project pic</th>
                        <th> Publication status</th>
                        <th>Action</th>
                        </thead>
                        @foreach($projects as $project)
                        <tbody>
                        <td>{{$project->page_number}}</td>
                        <td>{{$project->name}}</td>
                        <td>{{$project->project_objective}}</td>
                        <td>{{$project->short_description}}</td>
                        <td>{!! $project->long_description !!}</td>
                        <td>{{$project->project_outcome}}</td>
                        <td>
                            <img src="{{asset($project->course_pic)}}" class="img-responsive">
                        </td>
                        <td>
                            {{$project->publication_status==1?'Published':'Unpublished'}}
                        </td>
                        <td>
                            @if($project->publication_status==1)
                             <a href="{{route('unpublish-project-info',['id'=>$project->id])}}" class="btn btn-warning btn-xs" title="Unpublish info"><span class="fa fa-arrow-up"></span></a>
                            @else
                            <a href="{{route('publish-project-info',['id'=>$project->id])}}" class="btn btn-danger btn-xs" title="Publish info"><span class="fa fa-arrow-down"></span></a>
                            @endif
                            <a href="{{route('edit-project-info',['id'=>$project->id])}}" class="btn btn-info btn-xs" title="Edit info"><span class="fa fa-edit"></span></a>
                            <a href="{{route('delete-project-info',['id'=>$project->id])}}" class="btn btn-danger btn-xs" title="Delete info"><span class="fa fa-trash"></span></a>
                        </td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection





