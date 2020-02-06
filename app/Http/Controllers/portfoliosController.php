<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class portfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = portfolio::all();
        return view('admin.portfolio.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
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
            'url' => 'required',
            
            'file' => 'required',
            ]);
    
            $newproject = new portfolio();
            $newproject->name = $request->name;
            $newproject->url = $request->url;
           
            if ($request->hasfile('file')) {
                $imagename = $request->file->getClientOriginalName();
                $request->file->move(public_path('images/upload'), $imagename);
                $newproject->image_name = $imagename;
                $newproject->save();
                Session()->flash('message', 'added sucessfully'); 
                Session()->flash('alert-class', 'alert-success');  
                return view('admin.portfolio.create');
            }
            else{
                session()->flash('message','file not selected');
                return view('admin.portfolio.create');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = portfolio::find($id);
        return view ('admin.portfolio.edit', compact('member'));
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
       
    
            $newproject = portfolio::find($id);
            $newproject->name = $request->name;
            $newproject->url = $request->url;
           
            if ($request->hasfile('file')) {
                $imagename = $request->file->getClientOriginalName();
                $request->file->move(public_path('images/upload'), $imagename);
                $newproject->image_name = $imagename;
                $newproject->save();
                session()->flash('message','Updated sucessfully');
                Session()->flash('alert-class', 'alert-success'); 
                return redirect()->route('portfolio.index');
            }
            else{
                $newproject->save();
                session()->flash('message','Updated sucessfully');
                Session()->flash('alert-class', 'alert-success'); 
                return redirect()->route('portfolio.index');
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
        $portfolio = Portfolio::find($id);
        if (!portfolio != null){
            $portfolio->delete();
            Session()->flash('message','delete sucessfully');
            Session()->flash('alert-class', 'alert-danger');
            return redirect()->route('portfolio.index');
        }
        else{
            Session()->flash('message','Already deleted just reload');
            Session()->flash('alert-class', 'alert-danger');
            return redirect()->route('portfolio.index');
        }
        
    }
}
