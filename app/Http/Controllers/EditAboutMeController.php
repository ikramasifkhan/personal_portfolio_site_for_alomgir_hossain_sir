<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Image;
class EditAboutMeController extends Controller
{
    public function index($id){
        $about= About::find($id);
        return view('admin.about.EditAbout',[
            'about'=>$about
        ]);
    }
    protected function validateInfo($request){
        $request->validate([
            'name' => 'required|',
            'title' => 'required',
            'short_description'=>'required',
            'long_description'=>'required',
            'date_of_birth'=>'required',
            'short_description'=>'required',
            'birth_location'=>'required',
            'languages'=>'required',
            'profile_pic'=>'image'
        ]);
    }

    protected function profile_image($request) {
        $profileImage = $request->file('profile_pic');
        $FileType = $profileImage->getClientOriginalExtension();
        $ImageName = $request->name . '.' . $FileType;
        $directory = 'profile-image/';
        $ImageUrl = $directory . $ImageName;
        Image::make($profileImage)->save($ImageUrl);
        return $ImageUrl;
    }
    
    protected function aboutInfo($request,$about, $ImageUrl=null) {
        $about->name = $request->name;
        $about->title = $request->title;
        $about->short_description = $request->short_description;
        $about->long_description = $request->long_description;
        $about->date_of_birth = $request->date_of_birth;
        $about->birth_location = $request->birth_location;
        $about->languages = $request->languages;
        if($ImageUrl){
            $about->profile_pic = $ImageUrl;
        }
        $about->publication_status = $request->publication_status;
        
        $about->save();
    }

    public function UpdateInfo(Request $request){
        $about= About::find($request->about_id);
        $about_image=$request->file('profile_pic');
        $this->validateInfo($request);
        
        if($about_image){
            unlink($about->profile_pic);
            $ImageUrl= $this->profile_image($request);
            $this->aboutInfo($request,$about, $ImageUrl);
        }else{
            $this->aboutInfo($request,$about);
        }
        
        
        
        return redirect('/about-me/manage')->with('message', 'Info updated successfully');
    }
}
