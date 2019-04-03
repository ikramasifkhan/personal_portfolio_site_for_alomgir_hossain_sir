<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;

class ExperienceController extends Controller
{
    public function index(){
        return view('admin.experience.AddExperience');
    }
    
    protected function ValidateForm($request){
        $request->validate([
            'institute_name' => 'required',
            'starting_year' => 'required|min:1950|max:2080|numeric',
            'finishing_year' => 'required|min:1950|max:2080|numeric',
            'short_description'=>'required|max: 300'
        ]);
    }
    
    protected function ExperienceBasicInfo($request, $experience){
        $experience->institute_name=$request->institute_name;
        $experience->starting_year=$request->starting_year;
        $experience->finishing_year=$request->finishing_year;
        $experience->short_description=$request->short_description;
        $experience->publication_status=$request->publication_status;
        
        $experience->save();
    }
    
    public function SaveExperienceInfo(Request $request){
        $experience= new Experience();
        $this->ValidateForm($request);
        $this->ExperienceBasicInfo($request, $experience);
        
        return redirect('/experience/add')->with('message', 'Info saved successfully');
    }
    
    public function ManageExperience(){
        $experiences= Experience::all();
        
        return view('admin.experience.ManageExperience',[
            'experiences'=>$experiences
        ]);
    }
    
    public function UnpublishExperienceInfo($id){
        $experience=Experience::find($id);
        $experience->publication_status=0;
        
        $experience->save();
        return redirect('/experience/manage')->with('message', 'Info unpublished successfully');
    }
    
    public function PublishExperienceInfo($id){
        $experience=Experience::find($id);
        $experience->publication_status=1;
        
        $experience->save();
        return redirect('/experience/manage')->with('message', 'Info published successfully');
    }
    
    public function EditExperienceInfo($id){
        $experience=Experience::find($id);
        
        return view('admin.experience.EditExperience',[
            'experience'=>$experience
        ]);
    }
    
    public function UpdateExperienceInfo(Request $request){
        $experience=Experience::find($request->experience_id);
        
         $this->ValidateForm($request);
        $this->ExperienceBasicInfo($request, $experience);
        
        return redirect('/experience/manage')->with('message', 'Info updated successfully');
    }
    
    public function DeleteExperienceInfo($id){
        $experience=Experience::find($id);
        $experience->delete();
        
        return redirect('/experience/manage')->with('message', 'Info deleted successfully');
    }
}
