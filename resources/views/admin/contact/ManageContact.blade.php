@extends('admin.master')

@section('title')
contact details
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage your contact info   
                    <b class="text-success"> {{Session::get('message')}}</b>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light table-bordered">
                        <thead>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Location latitude</th>
                        <th>Location Longitude</th>
                        <th> Publication status</th>
                        <th>Action</th>
                        </thead>
                        @foreach($contacts as $contact)
                        <tbody>
                        <td>{{$contact->address}}</td>
                        <td>{{$contact->email_address}}</td>
                        <td>{{$contact->contact_number}}</td>
                        <td>{{$contact->latitude}}</td>
                        <td>{{$contact->longitude}}</td>
                        <td >
                            {{$contact->publication_status==1?'Published':'Unpublished'}}
                        </td>
                        <td>
                            @if($contact->publication_status==1)
                            <a href="{{route('unpublish-contact-info',['id'=>$contact->id])}}" class="btn btn-warning btn-xs" title="Unpublish it"><span class="fa fa-arrow-up"></span></a>
                            @else
                            <a href="{{route('publish-contact-info',['id'=>$contact->id])}}" class="btn btn-danger btn-xs" title="Publish it"><span class="fa fa-arrow-down"></span></a>
                            @endif
                             <a href="{{route('edit-contact-info',['id'=>$contact->id])}}" class="btn btn-info btn-xs" title="Edit it"><span class="fa fa-edit"></span></a>
                             <a href="{{route('delete-contact-info',['id'=>$contact->id])}}" class="btn btn-danger btn-xs" title="Delete it"><span class="fa fa-trash"></span></a>
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



