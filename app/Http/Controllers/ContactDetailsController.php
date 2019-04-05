<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactDetailsController extends Controller
{
    public function index(){
        return view('admin.contact.AddContact');
    }
    
    protected function FormValidate($request){
        $request->validate([
            'address' => 'required',
            'email_address' => 'required|email',
            'contact_number' => 'required|max:15',
            'latitude' => 'required',
            'longitude' => 'required',
            'publication_status' => 'required',
        ]);
    }

        protected function ContactBasicInfo($request, $contact){
        $contact->address=$request->address;
        $contact->email_address=$request->email_address;
        $contact->contact_number=$request->contact_number;
        $contact->latitude=$request->latitude;
        $contact->longitude=$request->longitude;
        $contact->publication_status=$request->publication_status;
        $contact->save();
        
    }
    
    public function SaveContactDetailsInfo(Request $request){
        $contact= new Contact();
        $this->FormValidate($request);
        $this->ContactBasicInfo($request, $contact);
        
        return redirect('/contact-details/add')->with('message', 'Info saved successfully');
    }

    public function ManageContactInfo(){
        $contacts= Contact::all();
        return view('admin.contact.ManageContact',[
            'contacts'=>$contacts
        ]); 
    }
    
    public function UnpublishContactInfo($id){
        $contact= Contact::find($id);
        $contact->publication_status=0;
        $contact->save();
        return redirect('/contact-details/manage')->with('message','Info unpublished successfully');
    }
    
    public function PublishContactInfo($id){
        $contact= Contact::find($id);
        $contact->publication_status=1;
        $contact->save();
        return redirect('/contact-details/manage')->with('message','Info published successfully');
    }
    
    public function EditContactInfo($id){
        $contact=Contact::find($id);
        
        return view('admin.contact.EditContact',[
            'contact'=>$contact
        ]);
    }
    
    public function UpdateContactInfo(Request $request){
        $contact=Contact::find($request->contact_id);
        
        $this->FormValidate($request);
        $this->ContactBasicInfo($request, $contact);
        return redirect('/contact-details/manage')->with('message','Info updated successfully');
    }
    
    public function DeleteContactInfo($id){
        $contact=Contact::find($id);
        $contact->delete();
        
        return redirect('/contact-details/manage')->with('message','Info deleted successfully');
    }
}
