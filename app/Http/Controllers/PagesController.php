<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	// load each route from here
    public function getHome(){
    	return view('home');

    }

    public function getAbout(){
    	return view('about');

    }

    public function getContact(){
    	return view('contact');

    }

    public function getMore(){
    	return view('more');

    }

    public function getContacts(){
    	return view('/contacts');

    }

    public function getWelcome(){
    	return view('/welcome');

    }
}

