@extends('admin.master')

@section('title')
skill
@endsection

@section('body')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add your skill info <b class="text-success">{{Session::get('message')}}</b>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="{{route('save-skill-info')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Skill name</label>
                                        <input type="name" class="form-control" id="name" placeholder="Your skill name" name="skill_name" required max="30" min="1">
                                        <span><b class="text-danger">{{$errors->has('skill_name')?$errors->first('skill_name') :''}}</b></span>
                                     </div>
                                    
                                     <div class="form-group">
                                        <label for="quantity">Skill quantity (In percent)</label>
                                        <input type="number" class="form-control" id="quantity"  name="skill_amount" required max="100" min="1">
                                        <span><b class="text-danger">{{$errors->has('skill_amount')?$errors->first('skill_amount') :''}}</b></span>
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

