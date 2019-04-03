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
                    Manage your skill info   
                    <b class="text-success"> {{Session::get('message')}}</b>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light table-bordered">
                        <thead>
                            <th>Skill name</th>
                            <th>Skill amount in percent</th>
                            <th>Publication status</th>
                            <th>Action</th>
                        </thead>
                        @foreach($skills as $skill)
                        <tbody>
                            <td>{{$skill->skill_name}}</td>
                            <td>{{$skill->skill_amount}} %</td>
                            <td>
                                {{$skill->publication_status==1?'Published':'Unpublished'}}
                            </td>
                            <td>
                                @if($skill->publication_status==1)
                                <a href="{{route('unpublish-skill',['id'=>$skill->id])}}" class="btn btn-warning btn-xs" title="Unpublish it"><span class="fa fa-arrow-up"></span></a>
                               @else
                                <a href="{{route('publish-skill',['id'=>$skill->id])}}" class="btn btn-danger btn-xs" title="Publish it"><span class="fa fa-arrow-down"></span></a>
                                @endif
                                <a href="{{route('edit-skill',['id'=>$skill->id])}}" class="btn btn-info btn-xs" title="Edit it"><span class="fa fa-edit"></span></a>
                                <a href="{{route('delete-skill',['id'=>$skill->id])}}" class="btn btn-danger btn-xs" title="delete it"><span class="fa fa-trash"></span></a>
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



