@extends('admin.master')


@section('title')
coursed
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage your course info   
                    <b class="text-success"> {{Session::get('message')}}</b>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light table-bordered">
                        <thead>
                            <th>Name of the course</th>
                            <th>Course objective</th>
                            <th>Course short description</th>
                            <th>Course long description</th>
                            <th>Publication status</th>
                            <th>Action</th>
                        </thead>
                        @foreach($courses as $course)
                        <tbody>
                            <td>{{$course->name}}</td>
                            <td>{{$course->course_objective}}</td>
                            <td>{{$course->short_description}}</td>
                            <td>{{$course->long_description}}</td>
                            <td>
                                @if($course->publication_status==1)
                                 Published
                                @else
                                Unpublished
                                @endif
                            </td>
                            <td>
                                <a href="{{route('course-detils',['id'=>$course->id])}}" class="btn btn-info btn-xs" title="View Details"><span class="fa fa-arrow-right"></span></a>
                                @if($course->publication_status==1)
                                <a title="Unpublish it" class="btn btn-warning btn-xs" href="{{route('unpublish-course-info',['id'=>$course->id])}}"><span class="fa fa-arrow-up"></span></a>
                                @else
                                <a title="Publish it" class="btn btn-danger btn-xs" href="{{route('publish-course-info',['id'=>$course->id])}}"><span class="fa fa-arrow-down"></span></a>
                                @endif
                                <a title="Edit it" class="btn btn-warning btn-xs" href="{{route('edit-course-info',['id'=>$course->id])}}"><span class="fa fa-edit"></span></a>
                                
                                <a title="Delete it" class="btn btn-danger btn-xs" href="{{route('delete-course-info',['id'=>$course->id])}}"><span class="fa fa-trash"></span></a>
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