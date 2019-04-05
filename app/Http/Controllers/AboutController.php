<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Skill;
use App\Service;
use App\Education;
use App\Experience;

class AboutController extends Controller
{
    public function index(){
        $abouts=About::where('publication_status',1)
                ->orderBy('id','Desc')
                ->take(1)
                ->get();
        $skills=Skill::where('publication_status', 1)
                ->orderBy('id', 'DESC')
                ->get();
        $services= Service::where('publication_status',1)
                ->orderBy('id','DESC')
                ->get();
        return view('front-end.about.about',[
            'abouts'=>$abouts,
            'skills'=>$skills,
            'services'=>$services
        ]);
    }
    
    public function resume(){
        $educations=Education::where('publication_status', 1)
                ->orderBy('starting_year','DESC')
                ->get();
        $experiences= Experience::where('publication_status',1)
                ->orderBy('starting_year','DESC')
                ->get();
        return view('front-end.resume.resume',[
            'educations'=>$educations,
            'experiences'=>$experiences
        ]);
    }
}
