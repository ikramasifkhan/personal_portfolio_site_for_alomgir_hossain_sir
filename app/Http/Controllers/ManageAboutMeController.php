<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class ManageAboutMeController extends Controller
{
    public function index(){
        $abouts= About::all();
        return view('admin.about.manageAbout',[
            'abouts'=>$abouts
        ]);
    }
    
    public function UnpublishInfo($id){
        $about= About::find($id);
        $about->publication_status=0;
        $about->save();
        return redirect('/about-me/manage')->with('message','Info unpublished successfully');
    }
    
    public function PublishInfo($id){
        
        $about= About::find($id);
        $about->publication_status=1;
        $about->save();
        return redirect('/about-me/manage')->with('message','Info published successfully');
    }
    
    public function DeleteInfo($id){
        $about=About::find($id);
        $about->delete();
        
        return redirect('/about-me/manage')->with('message','Info deleted successfully');
    }
}
