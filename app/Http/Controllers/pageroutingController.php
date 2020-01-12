<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageroutingController extends Controller
{
    public function homepage(){
        return view('user.index');
    }
    
    public function aboutus(){
        return view('user.aboutus' , ['pagename'=>'About us']);
    }

    public function services(){
        return view('user.services', ['pagename'=>'Services']);
    }

    public function contact(){
        return view('user.contact', ['pagename'=>'Contact us']);
    }
    public function admin(){
        return view('admin.layout.master', ['pagename'=>'Contact us']);
    }
   
}
