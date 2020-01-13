<?php

namespace App\Http\Controllers;
use App\Ourteam;
use Illuminate\Http\Request;

class pageroutingController extends Controller
{
    public function homepage(){
        return view('user.index');
    }

    
    
    public function aboutus(){
        
        $ourteams  =  Ourteam::all();
        return view('user.aboutus' , ['pagename'=>'About us'] , compact('ourteams'));
    }

    public function services(){
        return view('user.services', ['pagename'=>'aboutus']);
    }

    public function contact(){
        return view('user.contact', ['pagename'=>'Contact us']);
    }
    public function addteam(){
        return view('admin.layout.master', ['pagename'=>'Contact us']);
    }
   
}
