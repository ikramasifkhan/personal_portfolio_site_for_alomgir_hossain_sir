@extends('front-end.master')
@section('title')
recent work
@endsection

@section('body')
<div class="container recent_work">
    <div class="row">
        <div class="col-1 pl-0 page_number">4</div>
    </div>

    <div class="row">
        <div class="col-12 page_title pl-0">Recent work </div>
    </div>

    <div class="row">
        <div class="col-12 px-0">
            <div id="filters" class=" btn-group  isotope_button_group">  
                <button class="btn btn-sm  my_button active" data-filter="*">show all</button>
                <button class="btn btn-sm btn-danger my_button" data-filter=".laravel_project">Laravel project</button>
                <button class="btn btn-sm btn-danger my_button" data-filter=".php_project">Row php project</button>
                <button class="btn btn-sm btn-danger my_button" data-filter=".web_design">Responsive web design</button>  
            </div>

            <div class="grid">
                <div class="element-item  col-md-4 laravel_project">
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

                <div class="element-item  col-md-4 php_project">
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
                <div class="element-item col-md-4 web_design">
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

                <div class="element-item  col-md-4 laravel_project">
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
                <div class="element-item  col-md-4 php_project">
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
                <div class="element-item col-md-4 web_design">
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

                <div class="element-item  col-md-4 laravel_project">
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
                <div class="element-item  col-md-4 php_project">
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

