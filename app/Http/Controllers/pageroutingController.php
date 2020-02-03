<?php

namespace App\Http\Controllers;
use App\Ourteam;
use App\Client;
use App\Testimonial;
use Illuminate\Http\Request;

class pageroutingController extends Controller
{
    public function homepage(){
        $clients = Client::all();
        $testimonials=Testimonial::all();
        return view('user.index',compact('clients','testimonials'));
    }

    
    
    public function aboutus(){
        $clients = Client::all();
        $boards = Ourteam::where('board_of_director', 1)->get();
        $executives = Ourteam::where('executive_team', 1)->get();
        return view('user.aboutus' , ['pagename'=>'About us'] , compact('boards','executives','clients'));
    }

    public function services(){
        return view('user.services', ['pagename'=>'aboutus']);
    }

    public function ARVR(){
        return view('user.services.ARVR', ['pagename'=>'AR\VR']);
    }
    public function Web(){
        return view('user.services.Web', ['pagename'=>'Web']);
    }
    public function Seo(){
        $clients = Client::all();
        return view('user.services.Seo', ['pagename'=>'Seo'],compact('clients'));
    }
    public function Mobile(){
        return view('user.services.Mobile', ['pagename'=>'Mobile']);
    }
    public function privacy(){
        return view('user.privacy', ['pagename'=>'privacy']);
    }

    public function contact(){
        return view('user.contact', ['pagename'=>'Contact us']);
    }
    public function addteam(){
        return view('admin.layout.master', ['pagename'=>'Contact us']);
    }

   

   
}
