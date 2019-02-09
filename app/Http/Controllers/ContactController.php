<?php

namespace App\Http\Controllers;
// Illuminate is just laravel
use Illuminate\Http\Request;

// extend the core controller when creating a controller
class ContactController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required'
    	]);

    	 return 'SUCCESS';
    }
   
}
