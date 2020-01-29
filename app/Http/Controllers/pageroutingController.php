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
        $boards = Ourteam::where('board_of_director', 1)->get();
        $executives = Ourteam::where('executive_team', 1)->get();
        return view('user.aboutus' , ['pagename'=>'About us'] , compact('boards','executives'));
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
