<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class RecentWorkController extends Controller
{
    public function index(){
        $projects=Project::all();
        return view('front-end.work.work',[
            'projects'=>$projects
        ]);
    }
    
    public function ProjectDetails($id) {
        $project = Project::find($id);
        return view('front-end.work.ProjectDetails', [
                'project'=>$project          
        ]);
    }

}
