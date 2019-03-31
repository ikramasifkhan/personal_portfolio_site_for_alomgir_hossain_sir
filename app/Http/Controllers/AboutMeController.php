<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\About;
use Image;

class AboutMeController extends Controller {

    public function index() {
        return view('admin.about.about');
    }
    protected function validateInfo($request) {
        $request->validate([
            'name' => 'required|',
            'title' => 'required',
            'short_description'=>'required',
            'long_description'=>'required',
            'date_of_birth'=>'required',
            'short_description'=>'required',
            'birth_location'=>'required',
            'languages'=>'required',
            'profile_pic'=>'required|image'
        ]);
    }

    protected function profile_image($request) {
        $profileImage = $request->file('profile_pic');
        $FileType = $profileImage->getClientOriginalExtension();
        $ImageName=$request->name.'.'.$FileType;
        $directory = 'profile-image/';
        $ImageUrl = $directory . $ImageName;
        Image::make($profileImage)->save($ImageUrl);
        return $ImageUrl;
    }

    protected function aboutInfo($request, $imageUrl) {
        $about = new About();
        $about->name = $request->name;
        $about->title = $request->title;
        $about->short_description = $request->short_description;
        $about->long_description = $request->long_description;
        $about->date_of_birth = $request->date_of_birth;
        $about->birth_location = $request->birth_location;
        $about->languages = $request->languages;
        $about->profile_pic = $imageUrl;
        $about->publication_status = $request->publication_status;
        $about->save();
    }

    public function SaveInfo(Request $request) {
        $this->validateInfo($request);


        $imageUrl = $this->profile_image($request);

        $this->aboutInfo($request, $imageUrl);

        return redirect('/about-me/add')->with('message', 'Your information save successfully');
    }

}
