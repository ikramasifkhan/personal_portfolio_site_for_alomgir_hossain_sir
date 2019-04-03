@extends('admin.master')

@section('title')
service
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage your education info   
                    <b class="text-success"> {{Session::get('message')}}</b>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light table-bordered">
                        <thead>
                            <th>Name of the institute</th>
                            <th>Year</th>
                            <th>Short description</th>
                            <th>Short publication status</th>
                            <th>Action</th>
                        </thead>
                        @foreach($educations as $education)
                        <tbody>
                            <td>{{$education->institute_name}}</td>
                            <td>{{$education->starting_year.' '.'To'.' '. $education->finishing_year}}</td>
                            <td>{{$education->short_description}}</td>
                            <td>
                                {{$education->publication_status==1?'Published':'Unpublished'}}
                            </td>
                            <td>
                                @if($education->publication_status==1)
                                <a href="{{route('unpublish-education-info',['id'=>$education->id])}}" class="btn btn-warning btn-xs" title="Unpublish it"><span class="fa fa-arrow-up"></span></a>
                                @else
                                <a href="{{route('publish-education-info',['id'=>$education->id])}}" class="btn btn-danger btn-xs" title="Publish it"><span class="fa fa-arrow-down"></span></a>
                                @endif
                                 <a href="{{route('edit-education-info',['id'=>$education->id])}}" class="btn btn-info btn-xs" title="Edit it"><span class="fa fa-edit"></span></a>
                                 <a href="{{route('delete-education-info',['id'=>$education->id])}}" class="btn btn-danger btn-xs" title="Delete it"><span class="fa fa-trash"></span></a>
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


