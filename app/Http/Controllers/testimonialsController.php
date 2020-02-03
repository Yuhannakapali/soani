<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class testimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas  =  Testimonial::all();
        return view('admin.testimonial.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $request->validate([
        'name' => 'required',
        'designation' => 'required',
        'message' => 'required',
        'file' => 'required',
        ]);

        $newtestimonial = new Testimonial();
        $newtestimonial->name = $request->name;
        $newtestimonial->designation = $request->designation;
        $newtestimonial->message = $request->message;
        

        if ($request->hasfile('file')) {
            $imagename = $request->file->getClientOriginalName();
            $request->file->move(public_path('images/upload'), $imagename);
            $newtestimonial->image_name = $imagename;
            $newtestimonial->save();
            session()->flash('message','Added Successfully');
            return view('admin.testimonial.create');
        }
        else{
            session()->flash('message','file not selected');
            return view('admin.testimonial.create');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Testimonial::find($id);
        return view ('admin.testimonial.edit', compact('member'));
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
        $testimonial= Testimonial::find($id);
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->message = $request->message;
        
       
        if ($request->hasfile('file')) {
            $imagename = $request->file->getClientOriginalName();
            $request->file->move(public_path('images/upload'), $imagename);
            $testimonial->image_name = $imagename;
            $testimonial->save();
            session()->flash('message','Updated');
            return redirect()->route('testimonial.index');
        }
        else{
            $testimonial->save();
            session()->flash('message','Updated');
            return redirect()->route('testimonial.index');
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
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        session()->flash('message','deleted Successfully');
        return redirect()->route('testimonial.index');
    }
}
