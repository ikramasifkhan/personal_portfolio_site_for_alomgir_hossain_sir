@extends('front-end.master')
@section('title')
course schedule
@endsection

@section('body')
<div class="container main">
    <div class="main_content">
        <div class="main_content_overlay">
            <div class="row">
                <div class="col-3 page_number">1.1.2</div>
            </div>

            <div class="row course_schedule">
                <div class="col-12 px-0">
                    <table class="table table-responsive-sm table-bordered">
                        <tr>
                            <th>Date</th>
                            <th>Day</th>
                            <th>Topic will be covered</th>
                            <th>Additional file</th>
                        </tr>
                        <tr>
                            <td>January 20 2019</td>
                            <td>Saturday</td>
                            <td><p>Sed lectus est, sollicitudin at consectetur non, fringilla at dolor. In hac habitasse platea dictumst.Proin et euismod iSed lectus est, sollicitudin at consectetur non, fringilla at dolor. In hac habitasse platea dictumst.Proin et euismod i</p></td>
                            <td>Demo file</td>
                        </tr>
                        <tr>
                            <td>January 20 2019</td>
                            <td>Saturday</td>
                            <td>Sed lectus est, sollicitudin at consectetur non, fringilla at dolor. In hac habitasse platea dictumst.Proin et euismod i</td>
                            <td>Demo file</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection