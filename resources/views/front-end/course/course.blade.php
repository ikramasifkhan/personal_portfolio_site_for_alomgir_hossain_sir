@extends('front-end.master')
@section('title')
course
@endsection
@section('body')
<div class="container main">
    <div class="main_content">
        <div class="main_content_overlay">
            <div class="row">
                <div class="col-2 page_number">1.2</div>
            </div>
            <div class="row course_page">
                <div class="col-12 px-0">
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Course name</b></div>
                        <div class="col-10 course_page_content_text">Compiller design</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Course code</b></div>
                        <div class="col-10 course_page_content_text">CSC-461</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Credit hours</b></div>
                        <div class="col-10 course_page_content_text">3</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Pre request </b></div>
                        <div class="col-10 course_page_content_text">Assembly language</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Pre request </b></div>
                        <div class="col-10 course_page_content_text">Assembly language</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Consulting hours </b></div>
                        <div class="col-10 course_page_content_text">Saturday 9.30-10.30 AM</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Test book name </b></div>
                        <div class="col-10 course_page_content_text">Head First on PHP </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title mark_title"><b>Mark distribution </b></div>
                        <div class="col-10">
                            <table class="table table-responsive">
                                <tr>
                                    <th>First term</th>
                                    <td>Demo</td>
                                </tr>
                                <tr>
                                    <th>Mid term</th>
                                    <td>Demo</td>
                                </tr>
                                <tr>
                                    <th>Final term</th>
                                    <td>Demo</td>
                                </tr>
                                <tr>
                                    <th>Attendance</th>
                                    <td>Demo</td>
                                </tr>
                                <tr>
                                    <th>Assignment</th>
                                    <td>Demo</td>
                                </tr>

                                <tr>
                                    <th>Quiz and class test</th>
                                    <td>Demo</td>
                                </tr>

                                <tr>
                                    <th>Others</th>
                                    <td>Demo</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Course objective</b></div>
                        <div class="col-10 course_page_content_text">
                            <p>Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row course_page_content">
                        <div class="col-2 course_page_content_title"><b>Course description</b></div>
                        <div class="col-10 course_page_content_text">
                            <p>Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            <p>Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-2 pl-0 offset-5 course_page_btn">
                        <a href="{{route('course-schedule')}}" class="btn btn-danger my_button">View day by day course schedule</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
