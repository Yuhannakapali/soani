<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class testimonialsController extends Controller
{
    
    protected $dir ='images/upload';
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
        
            $newtestimonial = new Testimonial();
            $newtestimonial->name = $request->name;
            $newtestimonial->designation = $request->designation;

            if (!empty($request->message)) {
                $newtestimonial->message = $request->message;
            }
            else {
                session()->flash('message','message box empty');
                Session()->flash('alert-class', 'error');
                return redirect()->route('testimonial.create');
            }
            
    
            if ($request->hasfile('file')) {
                $image = $request->file('file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = $this->dir;
                $image->move($destinationPath, $name);
                $newtestimonial->image_name = $name;
                $newtestimonial->save();
                session()->flash('message','added sucessfully');
                Session()->flash('alert-class', 'success');
                return redirect()->route('testimonial.create');
            }
            else{
                session()->flash('message','file not selected');
                Session()->flash('alert-class', 'error');
                return redirect()->route('testimonial.create');
                
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
            $image = $request->file('file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = $this->dir;
            $image->move($destinationPath, $name);
            $testimonial->image_name = $name;
            $testimonial->save();
            session()->flash('message','updated sucessfully');
            Session()->flash('alert-class', 'success');
            return redirect()->route('testimonial.index');
        }
        else{
            $testimonial->save();
            session()->flash('message','Updated sucessfully');
            Session()->flash('alert-class', 'success');
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
        if ($testimonial != null){
            $testimonial->delete();
            Session()->flash('message','delete sucessfully');
            Session()->flash('alert-class', 'success');
            return redirect()->route('testimonial.index');
        }
        else{
            Session()->flash('message','Already deleted just reload');
            Session()->flash('alert-class', 'success');
            return redirect()->route('testimonial.index');
        }
    }
}
