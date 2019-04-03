<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;

class EducationController extends Controller
{
    public function index(){
        return view('admin.education.AddEducation',[
        ]);
    }
    
    protected function ValidateForm($request){
        $request->validate([
            'institute_name' => 'required',
            'starting_year' => 'required|min:1950|max:2080|numeric',
            'finishing_year' => 'required|min:1950|max:2080|numeric',
            'short_description'=>'required|max: 300'
        ]);
    }
    
    protected function EducationalBasicInfo($request, $education){
        $education->institute_name=$request->institute_name;
        $education->starting_year=$request->starting_year;
        $education->finishing_year=$request->finishing_year;
        $education->short_description=$request->short_description;
        $education->publication_status=$request->publication_status;
        
        $education->save();
    }

    public function SaveEducationalInfo(Request $request){
        $education= new Education();
        $this->ValidateForm($request);
        $this->EducationalBasicInfo($request, $education);
        
        return redirect('/education/add')->with('message', 'Info saved successfully');
    }
    
    public function ManageEducationalInfo(){
        $educations= Education::all();
        
        return view('admin.education.ManageEducation',[
            'educations'=>$educations
        ]);
    }
    
    public function UnpublishEducationalInfo($id){
        $education=Education::find($id);
        $education->publication_status=0;
        $education->save();
        return redirect('education/manage')->with('message','Unpublished info successfully');
    }
    
    public function PublishEducationalInfo($id){
        $education=Education::find($id);
        $education->publication_status=1;
        $education->save();
        return redirect('education/manage')->with('message','Unpublished info successfully');
    }
    
    public function EditEducationalInfo($id){
        $education=Education::find($id);
        return view('admin.education.EditEducation',[
            'education'=>$education
        ]);
    }
    
    public function UpdateEducationalInfo(Request $request){
        $education=Education::find($request->education_id);
        $this->ValidateForm($request);
        $this->EducationalBasicInfo($request, $education);
        return redirect('education/manage')->with('message','Update info successfully');
    }
    
    public function DeleteEducationalInfo($id){
        $education=Education::find($id);
        $education->delete();
        return redirect('education/manage')->with('message','Deleted info successfully');
    }
}
