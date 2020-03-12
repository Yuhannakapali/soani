<?php

namespace App\Http\Controllers;
use App\Ourteam;
use App\Client;
use App\Testimonial;
use App\Portfolio;
use App\Category;
use App\Blog;
use Illuminate\Http\Request;
use Carbon\Carbon;

class pageroutingController extends Controller
{
    public function homepage(){
        $clients = Client::all();
        $testimonials=Testimonial::all();
        return view('user.index',compact('clients','testimonials'));
    }

    
    
    public function aboutus(){
        $datas = portfolio::all();
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
        return view('user.services.web', ['pagename'=>'Web']);
    }
    public function Seo(){
        $clients = Client::all();
        return view('user.services.seo', ['pagename'=>'Seo'],compact('clients'));
    }
    public function Mobile(){
        return view('user.services.mobile', ['pagename'=>'Mobile']);
    }
    public function privacy(){
        return view('user.privacy', ['pagename'=>'privacy']);
    }

    public function contact(){
        return view('user.contact', ['pagename'=>'Contact us']);
    }
    
    public function portfolio(){
        $datas = portfolio::all();
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


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function showblog($id)
    {   
        $categories = Category::all();
        $data = Blog::find($id);
        dd($data);
        
        return view ('user.blogdetail', compact('data','categories'));
    }
    public function showblogbyCategory($id)
    {   
        $datas = Blog::where('category_id', $id)->get();
        if ($datas->isEmpty()) {
            return view('user.404');
        } else {
            return view ('user.blog', compact('datas'));   
        }
        
       
    }


   
}
