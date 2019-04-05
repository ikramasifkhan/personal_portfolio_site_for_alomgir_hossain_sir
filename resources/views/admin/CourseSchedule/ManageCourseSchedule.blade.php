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
                            <th>Page number</th>
                            <th>Course name</th>
                            <th>Date</th>
                            <th>Day</th>
                            <th>Discussion topic</th>
                            <th>File name</th>
                            <th>Publication status</th>
                            <th>Action</th>
                        </thead>
                        @foreach($courseSchedules as $courseSchedule)
                        <tbody>
                            <td>{{$courseSchedule->page_number}}</td>
                            <td>{{$courseSchedule->name}}</td>
                            <td>{{$courseSchedule->schedule_date}}</td>
                            <td>{{$courseSchedule->schedule_day}}</td>
                            <td>{!! $courseSchedule->discussion_topic !!}</td>
                            <td>
                                {{$courseSchedule->file_name}}
                                <a class="btn btn-info btn-xs" href="{{url('course/schedule/manage')}}" download="{{$courseSchedule->lecture_file}}" title="Download now"><span class="fa fa-download"></span></a>
                            </td>
                            <td>{{$courseSchedule->publication_status==1? 'Published':'Unpublished'}}</td>
                            <td>
                                @if($courseSchedule->publication_status==1)
                                <a href="{{route('unpublish_schedule_info',['id'=>$courseSchedule->id])}}" title="Unpublish it" class="btn btn-xs btn-warning"><span class="fa fa-arrow-up"></span></a>
                                @else
                                <a href="{{route('publish_schedule_info',['id'=>$courseSchedule->id])}}" title="Publish it" class="btn btn-xs btn-danger"><span class="fa fa-arrow-down"></span></a>
                                @endif
                                <a href="{{route('edit_schedule_info',['id'=>$courseSchedule->id])}}" title="Edit it" class="btn btn-xs btn-info"><span class="fa fa-edit"></span></a>
                                <a href="{{route('delete_schedule_info',['id'=>$courseSchedule->id])}}" title="Delete it" class="btn btn-xs btn-danger"><span class="fa fa-trash"></span></a>
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
