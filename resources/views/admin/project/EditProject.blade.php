@extends('admin.master')

@section('title')
project
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Update your project info
                            <span class="text-success">{{Session::get('message')}}</span>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="{{route('update-project-info')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="page_number">Page number</label>
                                        <input type="text" class="form-control" id="page_number" placeholder="Page number" name="page_number" required value="{{$project->page_number}}">
                                        <input type="hidden" class="form-control" id="page_number" placeholder="Page number" name="project_id" required value="{{$project->id}}">
                                        <span><b class="text-danger">{{$errors->has('page_number')?$errors->first('page_number') :''}}</b></span>
                                     </div>
                                    
                                     <div class="form-group">
                                        <label for="name">project name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Project name" name="name" required value="{{$project->name}}">
                                        <span><b class="text-danger">{{$errors->has('name')?$errors->first('name') :''}}</b></span>
                                     </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label for="objective">Project objective </label>
                                        <textarea id="objective" name="project_objective" class="form-control" placeholder="Project objective" required>
                                            {{$project->project_objective}}
                                        </textarea>
                                        <span><b class="text-danger">{{$errors->has('project_objective')?$errors->first('project_objective'): ''}}</b></span>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="short_description">Projet short description</label>
                                        <textarea id="short_description" name="short_description" class="form-control" placeholder="Short description" required>
                                            {{$project->short_description}}
                                        </textarea>
                                        <span><b class="text-danger">{{$errors->has('short_description')?$errors->first('short_description'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="long_description">Project long description</label>
                                        <textarea id="editor" name="long_description" class="form-control" placeholder="Long description" required>
                                            {{$project->long_description}}
                                        </textarea>
                                        <span><b class="text-danger">{{$errors->has('long_description')?$errors->first('long_description'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="outcome">Project outcome and expected result</label>
                                        <textarea id="outcome" name="project_outcome" class="form-control" placeholder="Project outcome" required>
                                            {{$project->project_outcome}}
                                        </textarea>
                                        <span><b class="text-danger">{{$errors->has('project_outcome')?$errors->first('project_outcome'): ''}}</b></span>
                                    </div>
                                 
                                    
                                    <div class="form-group">
                                        <label for="exampleInputFile">Add a cover pic</label>
                                        <span><img src="{{asset($project->course_pic)}}" class="img-responsive" width="200px" height="200px;"></span>
                                        <input type="file" id="exampleInputFile" name="project_pic" >
                                        <span><b class="text-danger">{{$errors->has('project_pic')?$errors->first('project_pic'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Publication status</label>
                                        <input type="radio" name="publication_status"  value="1" {{$project->publication_status==1?'checked':''}} >Published
                                        <input type="radio" name="publication_status"  value="0" {{$project->publication_status==0?'checked':''}}>Unpublished
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


