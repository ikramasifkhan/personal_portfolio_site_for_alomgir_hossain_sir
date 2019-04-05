<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Image;
class ProjectController extends Controller
{
    public function index(){
        return view('admin.project.AddProject');
    }
    
    protected function FormValidation($request){
         $request->validate([
            'page_number' => 'required',
            'name' => 'required|max:255',
            'project_objective' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'project_outcome' => 'required',
            'course_pic' => 'nullable|image',
            'publication_status' => 'required',
        ]);
    }
    
    protected function ProjectImage($request){
        $ProjectImage=$request->file('project_pic');
        $ImageType=$ProjectImage->getClientOriginalExtension();
        $ImageName=$request->name.'.'.$ImageType;
        $directory='course_image/';
        $ImageUrl=$directory.$ImageName;
        Image::make($ProjectImage)->save($ImageUrl);
        return $ImageUrl;
    }

    protected function ProjectBasicInfo($request, $project, $ImageUrl=null){
        $project->page_number=$request->page_number;
        $project->name=$request->name;
        $project->project_objective=$request->project_objective;
        $project->short_description=$request->short_description;
        $project->long_description=$request->long_description;
        $project->project_outcome=$request->project_outcome;
        if($ImageUrl){
            $project->course_pic=$ImageUrl;
        }
        $project->publication_status=$request->publication_status;
        
        $project->save();
    }

    public function SaveProjectInfo(Request $request){
        $project= new Project();
        
        $this->FormValidation($request);
        $ImageUrl=$this->ProjectImage($request);
        $this->ProjectBasicInfo($request, $project, $ImageUrl);
        
        return redirect('/project/add')->with('message','Info saved successfully');
    }
    
    public function ManageProjectInfo(){
        $projects= Project::all();
        
        return view('admin.project.ManageProject',[
            'projects'=>$projects
        ]);
    }
    
    public function UnpublishProjectInfo($id){
        $project=Project::find($id);
        $project->publication_status=0;
        $project->save();
        
        return redirect('/project/manage')->with('message','Info unpublished successfully');
    }
    
    public function PublishProjectInfo($id){
        $project=Project::find($id);
        $project->publication_status=1;
        $project->save();
        
        return redirect('/project/manage')->with('message','Info published successfully');
    }
    
    public function EditProjectInfo($id){
        $project=Project::find($id);
        return view('admin.project.EditProject',[
            'project'=>$project
        ]);
    }
    
    public function UpdateProjectInfo(Request $request){
        $project=Project::find($request->project_id);
        $this->FormValidation($request);
        
        $ProjectImage=$request->file('project_pic');
        
        if($ProjectImage){
            unlink($project->course_pic);
            $ImageUrl=$this->ProjectImage($request);
            $this->ProjectBasicInfo($request, $project, $ImageUrl);
        }else{
            $this->ProjectBasicInfo($request, $project);
        }
        return redirect('/project/manage')->with('Info udpdated successfully');
    }
    
    public function DeleteProjectInfo($id){
        $project=Project::find($id);
        $project->delete();
        return redirect('/project/manage')->with('Info deleted successfully');
    }
}
