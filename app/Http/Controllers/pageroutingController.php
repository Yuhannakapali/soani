<?php

namespace App\Http\Controllers;
use App\Ourteam;
use App\Client;
use App\Testimonial;
use App\Portfolio;
use App\Blog;
use Illuminate\Http\Request;

class pageroutingController extends Controller
{
    public function homepage(){
        $clients = Client::all();
        $testimonials = Testimonial::all();
        return view('user.index',compact('clients','testimonials'));
    }

    
    
    public function aboutus(){
        $datas = Portfolio::all();
        $boards = Ourteam::where('type', 'board of director')->get();
        $executives = Ourteam::where('type','executive team')->get();
        return view('user.aboutus' , ['pagename'=>'About us'] , compact('boards','executives','datas'));
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
    
    public function portfolio(){
        $datas = Portfolio::all();
        return view('user.portfolio', ['pagename'=>'Portfolio'], compact('datas'));
    }
    public function blog(){
        $datas = Blog::all();
        return view('user.blog', ['pagename'=>'Blog'], Compact('datas'));
    }
    public function blogdetail(){
        
        return view('user.blogdetail', ['pagename'=>'blog']);
    }
    public function test(){
        
        return view('admin.layout.newdashboard.master' );
    }

   

   
}
