@extends('front-end.master')
@section('title')
Home
@endsection

@section('body')
<div class="container main">
    <div class="main_content">
        <div class="main_content_overlay">
            <div class="row">
                <div class="col-1 page_number">1</div>
            </div>

            <div class="row pl-0 my_introduction">
                <div class="col-12 pl-0">
                    <h1 class="page_title" id="home_page_title">Hi I am <strong>Ikram Asif Khan Radi</strong></h1>
                    <h3 class="page_subtitle" id="home_page_subtitle">I am a full stack web developer</h3>
                </div>

                <div class="col-6 pl-0  about_me_introduction">Sed lectus est, sollicitudin at consectetur non, fringilla at dolor. In hac habitasse platea dictumst.Proin et euismod ipsum. Cras elementum, augue in euismod convallis, quam mi posuere ligula, vitae semper quam lacus ac ante.</div>
                <div class="col-6"></div>
                <a href="{{route('about-me')}}" class="btn btn-danger my_button">Read more</a>
            </div>

            <div class="row my_services">
                <div class="col-12 pl-0">
                    <h3 class="section_title">My services</h3>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 col-xl-4 col-lg-4 my_service_content">
                    <div class="card my_card">
                        <img class="card-img-top" src="{{asset('/')}}front-end/images/laravel.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Compiller design</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('course-info')}}" class="btn btn-danger my_button">View  details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-4 col-lg-4 my_service_content">
                    <div class="card my_card">
                        <img class="card-img-top" src="{{asset('/')}}front-end/images/laravel.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Compiller design</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="course_details.html" class="btn btn-danger my_button">View  details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-4 col-lg-4 my_service_content">
                    <div class="card my_card">
                        <img class="card-img-top" src="{{asset('/')}}front-end/images/laravel.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Compiller design</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="course_details.html" class="btn btn-danger my_button">View  details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-4 col-lg-4 my_service_content">
                    <div class="card my_card">
                        <img class="card-img-top" src="{{asset('/')}}front-end/images/laravel.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Compiller design</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="course_details.html" class="btn btn-danger my_button">View  details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-4 col-lg-4 my_service_content">
                    <div class="card my_card">
                        <img class="card-img-top" src="{{asset('/')}}front-end/images/laravel.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Compiller design</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="course_details.html" class="btn btn-danger my_button">View  details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-4 col-lg-4 my_service_content">
                    <div class="card my_card">
                        <img class="card-img-top" src="{{asset('/')}}front-end/images/laravel.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Compiller design</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="course_details.html" class="btn btn-danger my_button">View  details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-4 col-lg-4 my_service_content">
                    <div class="card my_card">
                        <img class="card-img-top" src="{{asset('/')}}front-end/images/laravel.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Compiller design</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="course_details.html" class="btn btn-danger my_button">View  details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-4 col-lg-4 my_service_content">
                    <div class="card my_card">
                        <img class="card-img-top" src="{{asset('/')}}front-end/images/laravel.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Compiller design</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="course_details.html" class="btn btn-danger my_button">View  details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-4 col-lg-4 my_service_content">
                    <div class="card my_card">
                        <img class="card-img-top" src="{{asset('/')}}front-end/images/laravel.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Compiller design</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="course_details.html" class="btn btn-danger my_button">View  details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
