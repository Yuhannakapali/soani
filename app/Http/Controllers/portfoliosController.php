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
        $data = Portfolio::all();
        return view('admin.portfolio.index');
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
            $newprojhect->url = $request->url;
           
            if ($request->hasfile('file')) {
                $imagename = $request->file->getClientOriginalName();
                $request->file->move(public_path('images/upload'), $imagename);
                $newproject->image_name = $imagename;
                $newproject->save();
                session()->flash('message','Added Successfully');
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
       
    
            $newproject = new portfolio();
            $newproject->name = $request->name;
            $newprojhect->url = $request->url;
           
            if ($request->hasfile('file')) {
                $imagename = $request->file->getClientOriginalName();
                $request->file->move(public_path('images/upload'), $imagename);
                $newproject->image_name = $imagename;
                $newproject->save();
                session()->flash('message','Added Successfully');
                return view('admin.portfolio.create');
            }
            else{
                $newproject->save();
                return view('admin.portfolio.create');
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
        $portfolio->delete();
        session()->flash('message','deleted Successfully');
        return redirect()->route('portfolio.index');
    }
}
