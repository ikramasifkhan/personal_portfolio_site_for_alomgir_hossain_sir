<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Course;

class AlomgirHossaingController extends Controller
{
    public function index(){
        $abouts=About::where('publication_status', 1)
                ->orderBy('id','DESC')
                ->take(1)
                ->get();
        $courses=Course::where('publication_status',1)
                ->orderBy('id', 'DESC')
                ->get();
        return view('front-end.home.home',[
            'abouts'=>$abouts,
             'courses'=>$courses   
        ]);
    }
}
