@extends('front-end.master')
@section('title')
About
@endsection

@section('body')
<div class="container about_me">
    <div class="row">
        <div class="col-1 pl-0 page_number">2</div>
    </div>
    <div class="row">
        <div class="col-12 page_title pl-0">About me</div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 pl-0">
            <img src="{{asset('/')}}front-end/images/about_me.jpg" alt="about_me" class="img-fluid img-thumbnail">
            <div class="personal_infomation">
                <h3>Personal information</h3>
                <p><strong>Name:</strong> Ikram Asif Khan Radi</p>
                <p><strong>Birth date :</strong> 7th April 1996</p>
                <p><strong>Nationality:</strong> Bangladeshi</p>
                <p><strong>Born:</strong> Jamalpur Dhaka Bangladesh</p>
                <p><strong>Religion:</strong>Islam</p>
                <p><strong>Language:</strong>Bangla English</p>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 pr-0 about_me_content">
            <h3 class="">Mauris quis vehicula urna, non sagittis purus.</h3>
            <p>Aenean ut aliquet tellus. Vivamus varius aliquam euismod. Duis pretium, erat ac efficitur lobortis, sem quam dictum augue, in blandit magna diam ut mi. Sed felis tellus, eleifend et augue vel, hendrerit tincidunt mauris. Phasellus tempus sit amet orci eget congue. Fusce sed nisi ipsum</p>
            <h3 class="tecnical_skill">TECHNICAL SKILLS</h3>
            <div class="progress mt-0">
                <div class="progress-bar my_progress_bar progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">HTML</div>
            </div>
            <div class="progress">
                <div class="progress-bar my_progress_bar progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">HTML</div>
            </div>

            <h3 class="about_me_services">Services</h3>
            <ul>
                <li class="pt-0"><strong>Responsive web design</strong><br>Nunc porta dui a neque hendrerit imperdiet. Cras suscipit arcu risus, nec ultrices arcu fringilla at. Praesent facilisis, erat id placerat finibus, ex leo vehicula ipsum, sed dictum dui.</li>
                <li><strong>Wordpress theme development</strong><br>Nunc porta dui a neque hendrerit imperdiet. Cras suscipit arcu risus, nec ultrices arcu fringilla at. Praesent facilisis, erat id placerat finibus, ex leo vehicula ipsum, sed dictum dui.</li>
                <li><strong>Responsive web design</strong><br>Nunc porta dui a neque hendrerit imperdiet. Cras suscipit arcu risus, nec ultrices arcu fringilla at. Praesent facilisis, erat id placerat finibus, ex leo vehicula ipsum, sed dictum dui.</li>
            </ul>
        </div>
    </div>
</div>
@endsection

