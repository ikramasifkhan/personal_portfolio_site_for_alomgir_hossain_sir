@extends('admin.master')

@section('title')
contact
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add your contact info <b class="text-success">{{Session::get('message')}}</b>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="{{route('save-contact-info')}}">
                                    @csrf
                                     <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="Your address" name="address" required >
                                        <span><b class="text-danger">{{$errors->has('address')?$errors->first('address') :''}}</b></span>
                                     </div>
                                    
                                    <div class="form-group">
                                        <label for="email_address">Email address</label>
                                        <input type="email" class="form-control" id="email_address" placeholder="Email address" name="email_address" required>
                                        <span><b class="text-danger">{{$errors->has('email_address')?$errors->first('email_address') :''}}</b></span>
                                     </div>
                                    
                                    <div class="form-group">
                                        <label for="contact_number">Contact number</label>
                                        <input type="text" class="form-control" id="contact_number" placeholder="Contact number" name="contact_number" required>
                                        <span><b class="text-danger">{{$errors->has('contact_number')?$errors->first('contact_number') :''}}</b></span>
                                     </div>
                                    
                                    <div class="form-group">
                                        <label for="latitude">Location latitude</label>
                                        <input type="text" class="form-control" id="latitude" placeholder="latitude" name="latitude" required>
                                        <span><b class="text-danger">{{$errors->has('latitude')?$errors->first('latitude') :''}}</b></span>
                                     </div>
                                    
                                    <div class="form-group">
                                        <label for="latitude">Location Longitude</label>
                                        <input type="text" class="form-control" id="Longitude" placeholder="Longitude" name="longitude" required>
                                        <span><b class="text-danger">{{$errors->has('longitude')?$errors->first('longitude') :''}}</b></span>
                                     </div>
                                    
                                    <div class="form-group">
                                        <label for="">Publication status</label>
                                        <input type="radio" name="publication_status"  value="1" checked >Published
                                        <input type="radio" name="publication_status"  value="0" >Unpublished
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
