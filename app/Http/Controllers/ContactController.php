<?php

namespace App\Http\Controllers;
// Illuminate is just laravel
use Illuminate\Http\Request;
use App\Contact;

// extend the core controller when creating a controller
class ContactController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required'
    	]);

    // create a contact

    $contact = new Contact;
    $contact->name = $request->input('name');
    $contact->email = $request->input('email');
    $contact->message = $request->input('message');

    // save to db
    $contact->save();

    //redirect after save

    return redirect('/')->with('status','Contact details sent successfully');
    }
   


}
