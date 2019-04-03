<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class SeriviceController extends Controller
{
    public function index(){
        return view('admin.service.service');
    }
    
    protected function ServiceFormValidation($request) {
        $request->validate([
            'service_name' => 'required|max:255',
            'service_description' => 'required',
            'publication_status' => 'required',
        ]);
    }

    protected function SaveServiceBasicInfo($request, $services){
        $services->service_name=$request->service_name;
        $services->service_description=$request->service_description;
        $services->publication_status=$request->publication_status;
        
        $services->save();
    }

        public function SaveService(Request $request){
            
         $services = new Services();
        $this->ServiceFormValidation($request);

        $this->SaveServiceBasicInfo($request, $services);
        
        return redirect('/service/add')->with('message', 'Info saved successfully');
    }
    
    public function ShowService(){
        $services= Services::all();
        return view('admin.service.ManageService',[
            'services'=>$services
        ]);
    }
    
    public function UnpublishServiceInfo($id){
        $service= Services::find($id);
        
        $service->publication_status=0;
        $service->save();
        return redirect('/service/manage')->with('message', 'Info unpublish successfully');
    }
    public function PublishServiceInfo($id){
        $service= Services::find($id);
        
        $service->publication_status=1;
        $service->save();
        return redirect('/service/manage')->with('message', 'Info publish successfully');
    }
    
    public function EditServiceInfo($id){
        $service= Services::find($id);
        return view('admin.service.EditService',[
            'service'=>$service
        ]);
    }
    
    public function UpdateServiceInfo(Request $request){
        $services= Services::find($request->service_id);
        $this->ServiceFormValidation($request);
        $this->SaveServiceBasicInfo($request, $services);
        
        return redirect('/service/manage')->with('message', 'Update info saved successfully');
    }
    
    public function DeleteServiceInfo($id){
        $service=Services::find($id);
        $service->delete();
        return redirect('/service/manage')->with('message', 'Delete info  successful');
    }
}
