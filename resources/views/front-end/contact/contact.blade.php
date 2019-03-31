@extends('front-end.master')
@section('title')
contact
@endsection

@section('body')
<div class="container contact_details">
    <div class="overlay">
        <div class="row">
            <div class="col-1 pl-0 page_number">5</div>
        </div>

        <div class="row">
            <div class="col-12 page_title pl-0">Contacts </div>
        </div>

        <div class="row main_contact_content">
            <div class="col-xl-4 col-lg-4 col-md-4 pl-0 contact_content">
                <h3>GET IN TOUCH</h3>
                <p><strong>Address : </strong>Sector 10 Uttara Model Town</p>
                <p><strong>Phone : </strong>+88 01777 873960</p>
                <p><strong>Email : </strong>iakriubat2016@gmail.com</p>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 contact_form pr-0">
                <form action="" method="post">
                    <div class="form-group name">
                        <input type="email" class="form-control"  placeholder="Your name" id="name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"  placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="your subject" id="subject" class="form-control"></textarea>
                    </div>
                    <input type="submit" value="SUBMIT" class="btn btn-danger my_button">
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-12 px-0 location">
                <h3>My location</h3>
                <div class="google_map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15913.1279569827!2d90.38042568787344!3d23.886048697986173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c46b6de8f207%3A0x638eb6830d10167d!2sSector+10%2C+Dhaka+1230!5e0!3m2!1sen!2sbd!4v1548234031140" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </div>
        </div>
    </div>
</div>
@endsection

