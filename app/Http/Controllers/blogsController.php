<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class blogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newblog = new Blog();
        $newblog->title = $request->title;
        $newblog->body = $request->body;
        $newblog->Author = "Admin";
        $newblog->tags = "test tags";
        

        
        
        if ($request->hasfile('file')) {
            $imagename = $request->file->getClientOriginalName();
            $request->file->move(public_path('images/upload'), $imagename);
            $newblog->image_name = $imagename;
            $newblog->save();
            session()->flash('message','added sucessfully');
            Session()->flash('alert-class', 'alert-success');
            return redirect()->route('Blog.create');
        }
        else{
            session()->flash('message','file not selected');
            Session()->flash('alert-class', 'alert-danger');
            return redirect()->route('Blog.create');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Blog::find($id);
        return view ('user.blogdetail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Blog::find($id);
        return view ('admin.blog.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog= Blog::find($id);
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->Author = "Admin";
        $blog->tags = "test tags";

        if ($request->hasfile('file')) {
            $imagename = $request->file->getClientOriginalName();
            $request->file->move(asset('images/upload'), $imagename);
            $blog->image_name = $imagename;
            $blog->save();
            session()->flash('message','updated sucessfully');
            Session()->flash('alert-class', 'alert-success');
            return redirect()->route('BLog.index');
        }
        else{
            $blog->save();
            session()->flash('message','updated sucessfully');
            Session()->flash('alert-class', 'alert-success');
            return redirect()->route('Blog.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog != null){
            $blog->delete();
            Session()->flash('message','delete sucessfully');
            Session()->flash('alert-class', 'alert-danger');
            return redirect()->route('Blog.index');
        }
        else{
            Session()->flash('message','Already deleted just reload');
            Session()->flash('alert-class', 'alert-danger');
            return redirect()->route('blog.index');
        }
    }
}
