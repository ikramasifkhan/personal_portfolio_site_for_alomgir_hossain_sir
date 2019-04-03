<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class SkillController extends Controller
{
    public function index(){
        return view('admin.skill.AddSkill');
    }
    
    protected function SkillInfoValidation($request) {
        $request->validate([
            'skill_name' => 'required|max:30',
            'skill_amount' => 'required|min:1|max:100|numeric',
            'publication_status'=>'required'
        ]);
    }
    
    protected function SkillBasicInfo($request, $skill){
        $skill->skill_name=$request->skill_name;
        $skill->skill_amount=$request->skill_amount;
        $skill->publication_status=$request->publication_status;
        
        $skill->save();
    }

    public function SaveSkillInfo(Request $request){
        $skill=new Skill();
        $this->SkillInfoValidation($request);
        $this->SkillBasicInfo($request, $skill);
        
        return redirect('/skill/add')->with('message', 'Saved info successfully');
    }
    
    public function ManageSkillInfo(){
        $skills= Skill::all();
        return view('admin.skill.ManageSkill',[
            'skills'=>$skills
        ]);
    }
    
    public function UnpublishSkillInfo($id){
        $skill=Skill::find($id);
        $skill->publication_status=0;
        $skill->save();
        
        return redirect('/skill/manage')->with('message', 'Unpublish info successful');
    }
    
    public function PublishSkillInfo($id){
        $skill=Skill::find($id);
        $skill->publication_status=1;
        $skill->save();
        
        return redirect('/skill/manage')->with('message', 'Publish info successful');
    }
    
    public function EditSkillInfo($id){
        $skill=Skill::find($id);
        
        return view('admin.skill.EditSkill',[
            'skill'=>$skill
        ]);
    }
    
    public function UpdateSkillInfo(Request $request){
        $skill=Skill::find($request->skill_id);
        
        $this->SkillInfoValidation($request);
        $this->SkillBasicInfo($request, $skill);
        return redirect('/skill/manage')->with('message', 'Update info successfully');
    }
    
    public function DeleteSkillInfo($id){
        $skill=Skill::find($id);
         $skill->delete();
         
         return redirect('/skill/manage')->with('message', 'Delete info successful');
    }
}
