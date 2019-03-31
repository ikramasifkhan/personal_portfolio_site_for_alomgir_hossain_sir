@extends('admin.master')


@section('title')
course
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Course details
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light table-bordered">
                        <tr>
                            <th>Course name</th>
                            <td>{{$course->name}}</td>
                        </tr>
                        
                         <tr>
                            <th>Course code</th>
                            <td>{{$course->code}}</td>
                        </tr>
                        
                         <tr>
                            <th> Credit hours</th>
                            <td>{{$course->credit_hours}}</td>
                        </tr>
                        
                        <tr>
                            <th>Pre request course</th>
                            <td>{{$course->pre_request}}</td>
                        </tr>
                        
                        <tr>
                            <th>Consulting hour</th>
                            <td><td>{{$course->consult_hour}}</td></td>
                        </tr>
                        
                        <tr>
                            <th>Text book name</th>
                            <td><td>{{$course->book_name}}</td></td>
                        </tr>
                        
                        <tr>
                            <th>First term</th>
                            <td><td>{{$course->first_term}}</td></td>
                        </tr>
                        
                        <tr>
                            <th>Mid term</th>
                            <td><td>{{$course->mid_term}}</td></td>
                        </tr>
                        
                        <tr>
                            <th>Final term</th>
                            <td><td>{{$course->final}}</td></td>
                        </tr>
                        
                        <tr>
                            <th>Others term</th>
                            <td><td>{{$course->ohter_mark}}</td></td>
                        </tr>
                        
                        <tr>
                            <th>Cover pic</th>
                            <td><img src="{{asset($course->course_pic)}}" class="img-responsive" width="200px" height="200px"></td>
                        </tr>
                        
                         <tr>
                            <th></th>
                            <td><a class="btn btn-success" href="{{route('manage-course')}}">Back to your manage page</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection