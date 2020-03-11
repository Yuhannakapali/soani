<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;

use Illuminate\Support\Facades\Auth;
class blogsController extends Controller
{   
    protected $dir= 'images/upload';
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
        $categories = Category::all();
        return view('admin.blog.create',compact('categories'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $request->validate([
        'title' => 'required|unique:blogs|max:100|min:3',
        'body' => 'required|min:3',
        'tags' => 'nullable|min:3',
        'file'=>'required|mimes:jpeg,png,gif,jpg|max:2048'
        ]);


        $Author = Auth::user()->name;
        $newblog = new Blog();
        $newblog->title = $request->title;
        $newblog->body = $request->body;
        $newblog->Author = $Author;
        $newblog->tags = "test tags";
        $newblog->category_id = $request->category;
        
        $image = $request->file('file');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = $this->dir;
        $image->move($destinationPath, $name);
        $newblog->image_name = $name;
        $newblog->save();
        session()->flash('message','Added sucessfully');
        Session()->flash('alert-class', 'success');
        return redirect()->route('Blog.create');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $categories = Category::all();
        $data = Blog::find($id);
        return view ('user.blogdetail', compact('data','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $categories = Category::all();
        $member = Blog::find($id);
        return view ('admin.blog.edit', compact('member','categories'));
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
        $request->validate([
            'title' => 'max:100|min:3',
            'body' => 'min:3',
            'tags' => 'nullable|min:3',
            'file'=>'mimes:jpeg,png,gif,jpg|max:2048'
            ]);
        $blog= Blog::find($id);
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->category_id = $request->category;
        $blog->tags = "test tags";
        if ($request->hasfile('file')) {
            $image = $request->file('file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = $this->dir;
            $image->move($destinationPath, $name);
            $blog->image_name = $name;
            $blog->save();
            session()->flash('message','Updated sucessfully');
            Session()->flash('alert-class', 'success');
            return redirect()->route('Blog.index');
        }
        else{
            
            $blog->save();
            session()->flash('message','Updated sucessfully');
            Session()->flash('alert-class', 'success');
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
            Session()->flash('message','Delete sucessfully');
            Session()->flash('alert-class', 'error');
            return redirect()->route('Blog.index');
        }
        else{
            Session()->flash('message','Already deleted just reload');
            Session()->flash('alert-class', 'error');
            return redirect()->route('Blog.index');
        }
    }
}
