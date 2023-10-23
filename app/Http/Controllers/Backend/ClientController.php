<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    public function AllClient(){
        $client = Client::latest()->get();
        return view('backend.client.client_all',compact('client'));
    } // End Method 

 
    public function AddClient(){

       
      return view('backend.client.client_add');

    }// End Method 

    public function StoreClient(Request $request){

       
        Client::insert([ 
            'name' => $request->name, 
            'statut' => $request->statut,
            'contact' => $request->contact,
            'contact_whatsapp' => $request->contact_whatsapp,
            'email_adress' => $request->email_adress,
        ]);

       $notification = array(
            'message' => 'Client Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.client')->with($notification); 

    }// End Method 

    public function EditClient($id){

        $client = Client::findOrFail($id);
        return view('backend.client.client_edit',compact('client'));

    }// End Method 

    public function UpdateClient(Request $request){

        $client_id = $request->id;

         Client::findOrFail($client_id)->update([
            'name' => $request->name, 
            'statut' => $request->statut,
            'contact' => $request->contact,
            'contact_whatsapp' => $request->contact_whatsapp,
            'email_adress' => $request->email_adress,
        ]);

       $notification = array(
            'message' => 'Client Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.client')->with($notification); 


    }// End Method 

    

    public function DeleteClient($id){

        Client::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Client Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 


    }// End Method 
}
