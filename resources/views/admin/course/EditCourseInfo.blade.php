@extends('admin.master')

@section('title')
course
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit course info
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="{{route('update-course-info')}}" enctype="multipart/form-data">
                                    @csrf
                                     <div class="form-group">
                                        <label for="name">course name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Course name" name="name" required value="{{$course->name}}">
                                        <input type="text" class="form-control" id="name" placeholder="Course name" name="course_id" required value="{{$course->id}}">
                                        <span><b class="text-danger">{{$errors->has('name')?$errors->first('name') :''}}</b></span>
                                     </div>
                                    
                                    <div class="form-group">
                                        <label for="code">Course code</label>
                                        <input type="text" class="form-control" id="code" placeholder="Course code" name="code" required value="{{$course->code}}">
                                        <span><b class="text-danger">{{$errors->has('title')?$errors->first('code'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="code">Credit hours</label>
                                        <input type="number" class="form-control" id="code" placeholder="Credit hours" name="credit_hours" required min="1" value="{{$course->credit_hours}}">
                                        <span><b class="text-danger">{{$errors->has('credit_hours')?$errors->first('credit_hours'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="pre">Pre request course</label>
                                        <input type="text" class="form-control" id="pre" placeholder="Pre request course" name="pre_request" required value="{{$course->pre_request}}">
                                        <span><b class="text-danger">{{$errors->has('pre_request')?$errors->first('pre_request'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="consult">Consulting hour</label>
                                        <input type="text" class="form-control" id="consult" placeholder="Consulting hours" name="consult_hour" required value="{{$course->consult_hour}}">
                                        <span><b class="text-danger">{{$errors->has('consult_hour')?$errors->first('consult_hour'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="book">Text book name</label>
                                        <input type="text" class="form-control" id="book" placeholder="Book name" name="book_name" required value="{{$course->book_name}}">
                                        <span><b class="text-danger">{{$errors->has('book_name')?$errors->first('book_name'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="objective">Course objective </label>
                                        <textarea id="objective" name="course_objective" class="form-control" placeholder="Course objective" required>{{$course->course_objective}}</textarea>
                                        <span><b class="text-danger">{{$errors->has('course_objective')?$errors->first('course_objective'): ''}}</b></span>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="long_description">Course short description</label>
                                        <textarea id="short_description" name="short_description" class="form-control" placeholder="Short description" required>{{$course->short_description}}</textarea>
                                        <span><b class="text-danger">{{$errors->has('short_description')?$errors->first('short_description'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="long_description">Course long description</label>
                                        <textarea id="short_description" name="long_description" class="form-control" placeholder="Long description" required>{{$course->long_description}}</textarea>
                                        <span><b class="text-danger">{{$errors->has('long_description')?$errors->first('long_description'): ''}}</b></span>
                                    </div>
                                    
                                    <h3 class=" text-center text-2xl" style="margin: 5px">Add mark distribution for this course in percentage</h3>
                                    
                                    <div class="form-group">
                                        <label for="first">First term</label>
                                        <input type="number" class="form-control" id="first" placeholder="First term" name="first_term" required min="1" value="{{$course->first_term}}">
                                        <span><b class="text-danger">{{$errors->has('first_term')?$errors->first('first_term'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="second">Mid term</label>
                                        <input type="number" class="form-control" id="second" placeholder="Mid term" name="mid_term" required min="1" value="{{$course->mid_term}}">
                                        <span><b class="text-danger">{{$errors->has('mid_term')?$errors->first('mid_term'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="final">Final term</label>
                                        <input type="number" class="form-control" id="final" placeholder="Final term" name="final" required min="1" value="{{$course->final}}">
                                        <span><b class="text-danger">{{$errors->has('final')?$errors->first('final'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="others">Others</label>
                                        <input type="number" class="form-control" id="final" placeholder="Others" name="ohter_mark" required min="1" value="{{$course->ohter_mark}}">
                                        <span><b class="text-danger">{{$errors->has('ohter_mark')?$errors->first('ohter_mark'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputFile">Add a cover pic</label>
                                        <span><img src="{{asset($course->course_pic)}}" class="img-responsive" width="200px" height="200px"></span>
                                        <input type="file" id="exampleInputFile" name="course_pic">
                                        <span><b class="text-danger">{{$errors->has('course_pic')?$errors->first('course_pic'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Publication status</label>
                                        <input type="radio" name="publication_status"  value="1" {{$course->publication_status==1? 'checked':''}} >Published
                                        <input type="radio" name="publication_status"  value="0" {{$course->publication_status==0? 'checked':''}}>Unpublished
                                    </div>

                                    <input type="submit" class="btn btn-info" name="btn" value="Save Info">
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection