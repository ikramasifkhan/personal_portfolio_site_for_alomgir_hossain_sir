@extends('admin.master')

@section('title')
education
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add your experience info <b class="text-success">{{Session::get('message')}}</b>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="{{route('update-experience-info')}}">
                                    @csrf
                                     <div class="form-group">
                                        <label for="name">Your institute name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Your institute name" name="institute_name" required value="{{$experience->institute_name}}">
                                        <input type="hidden" class="form-control" id="hidden" placeholder="Your institute name" name="experience_id" required value="{{$experience->id}}" >
                                        <span><b class="text-danger">{{$errors->has('institute_name')?$errors->first('institute_name') :''}}</b></span>
                                     </div>
                                    
                                    <div class="form-group">
                                        <label for="starting_year">Starting year</label>
                                        <input type="number" class="form-control" id="starting_year" placeholder="Starting year" name="starting_year" required min="1950" max="2080" value="{{$experience->starting_year}}">
                                        <span><b class="text-danger">{{$errors->has('starting_year')?$errors->first('starting_year') :''}}</b></span>
                                     </div>
                                    
                                    <div class="form-group">
                                        <label for="finishing_year">Finishing year</label>
                                        <input type="number" class="form-control" id="starting_year" placeholder="Finishing year" name="finishing_year" required min="1950" max="2080" value="{{$experience->finishing_year}}">
                                        <span><b class="text-danger">{{$errors->has('finishing_year')?$errors->first('finishing_year') :''}}</b></span>
                                     </div>
                                    
                                    <div class="form-group">
                                        <label for="short_description"> Short  description</label>
                                        <textarea id="short_description" name="short_description" class="form-control" placeholder="Short description" required>
                                            {{$experience->short_description}}
                                        </textarea>
                                        <span><b class="text-danger">{{$errors->has('short_description')?$errors->first('short_description'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Publication status</label>
                                        <input type="radio" name="publication_status"  value="1" {{$experience->publication_status==1?'checked':''}} >Published
                                        <input type="radio" name="publication_status"  value="0" {{$experience->publication_status==0?'checked':''}}>Unpublished
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



