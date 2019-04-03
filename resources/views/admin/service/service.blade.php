@extends('admin.master')

@section('title')
service
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Save your service info <b class="text-success">{{Session::get('message')}}</b>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="{{route('save-service-info')}}">
                                    @csrf
                                     <div class="form-group">
                                        <label for="name">Your service name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Your service name" name="service_name" required>
                                        <span><b class="text-danger">{{$errors->has('service_name')?$errors->first('service_name') :''}}</b></span>
                                     </div>
                                    
                                    <div class="form-group">
                                        <label for="short_description"> Service description</label>
                                        <textarea id="short_description" name="service_description" class="form-control" placeholder="Service description" required></textarea>
                                        <span><b class="text-danger">{{$errors->has('service_description')?$errors->first('service_description'): ''}}</b></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Publication status</label>
                                        <input type="radio" name="publication_status"  value="1" checked>Published
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