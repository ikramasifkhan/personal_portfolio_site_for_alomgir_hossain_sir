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
                    Manage your service info   
                    <b class="text-success"> {{Session::get('message')}}</b>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light table-bordered">
                        <thead>
                            <th>Name of the service</th>
                            <th>Description</th>
                            <th>Publication status</th>
                            <th>Action</th>
                        </thead>
                        @foreach($services as $service)
                        <tbody>
                            <td>{{$service->service_name}}</td>
                            <td>{{$service->service_description}}</td>
                            <td>
                                {{$service->publication_status==1?'Published':'Unpublished'}}
                            </td>
                            <td>
                                @if($service->publication_status==1)
                                <a href="{{route('unpublish-service-info',['id'=>$service->id])}}" class="btn btn-warning btn-xs" title="Unpublish it"><span class="fa fa-arrow-up"></span></a>
                                @else
                                <a href="{{route('publish-service-info',['id'=>$service->id])}}" class="btn btn-danger btn-xs" title="Publish it"><span class="fa fa-arrow-down"></span></a>
                                @endif
                                <a href="{{route('edit-service-info',['id'=>$service->id])}}" class="btn btn-info btn-xs" title="Edit it"><span class="fa fa-edit"></span></a>
                                <a href="{{route('delete-service-info',['id'=>$service->id])}}" class="btn btn-danger btn-xs" title="Delete it"><span class="fa fa-trash"></span></a>
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


