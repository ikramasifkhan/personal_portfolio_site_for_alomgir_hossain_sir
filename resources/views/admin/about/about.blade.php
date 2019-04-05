@extends('admin.master')

@section('title')
about me 
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add about me info <span class="text-success">{{Session::get('message')}}</span>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="{{route('post-about-me')}}" enctype="multipart/form-data">
                                    @csrf
                                     <div class="form-group">
                                        <label for="name">Your name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
                                        <span><b class="text-danger">{{$errors->has('name')?$errors->first('name') :''}}</b></span>
                                     </div>
                                    
                                    <div class="form-group">
                                        <label for="title">Your title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Your title" name="title" required>
                                        <span><b class="text-danger">{{$errors->has('title')?$errors->first('title'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="short_description">Your short description</label>
                                        <textarea id="short_description" name="short_description" class="form-control" placeholder="Short description" required></textarea>
                                        <span><b class="text-danger">{{$errors->has('short_description')?$errors->first('short_description'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="long_description">Your long description</label>
                                        <textarea id="editor" name="long_description" class="form-control" placeholder="Long description" required></textarea>
                                        <span><b class="text-danger">{{$errors->has('long_description')?$errors->first('long_description'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="title">Your birth date</label>
                                        <input type="date" class="form-control" id="name" placeholder="Your birth date" name="date_of_birth" required>
                                        <span><b class="text-danger">{{$errors->has('date_of_birth')?$errors->first('date_of_birth'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="title">Your birth location</label>
                                        <input type="text" class="form-control" id="name" placeholder="Your birth location" name="birth_location" required>
                                        <span><b class="text-danger">{{$errors->has('birth_location')?$errors->first('birth_location'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="langulage">Your languages</label>
                                        <input type="text" class="form-control" id="langulage" placeholder="Your languages" name="languages" required>
                                        <span><b class="text-danger">{{$errors->has('languages')?$errors->first('languages'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" id="exampleInputFile" name="profile_pic" required>
                                        <span><b class="text-danger">{{$errors->has('profile_pic')?$errors->first('profile_pic'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Publication status</label>
                                        <input type="radio" name="publication_status"  value="1" checked >Published
                                        <input type="radio" name="publication_status"  value="0">Unpublished
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