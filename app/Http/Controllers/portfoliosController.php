<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class portfoliosController extends Controller
{
    protected $dir = 'images/upload';
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
            ]);
    
            $newproject = new portfolio();
            $newproject->name = $request->name;
            $newproject->url = $request->url;
           
            if ($request->hasfile('file')) {
                $image = $request->file('file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = $this->dir;
                $image->move($destinationPath, $name);
                $newproject->image_name = $imagename;
               
                $newproject->save();
                Session()->flash('message', 'Added sucessfully'); 
                Session()->flash('alert-class', 'success');  
                return redirect()->route('Portfolio.create');
            }
            else{
                session()->flash('message','File not selected');
                Session()->flash('alert-class', 'error');
                return redirect()->route('Portfolio.create');
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
                $image = $request->file('file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = $this->dir;
                $image->move($destinationPath, $name);
                $newproject->image_name = $name;
                $newproject->save();
                session()->flash('message','Updated sucessfully');
                Session()->flash('alert-class', 'success'); 
                return redirect()->route('Portfolio.index');
            }
            else{
                $newproject->save();
                session()->flash('message','Updated sucessfully');
                Session()->flash('alert-class', 'success'); 
                return redirect()->route('Portfolio.index');
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
        if ($portfolio != null){
            $portfolio->delete();
            Session()->flash('message','Deleted sucessfully');
            Session()->flash('alert-class', 'success');
            return redirect()->route('Portfolio.index');
        }
        else{
            Session()->flash('message','Already deleted just reload');
            Session()->flash('alert-class', 'error');
            return redirect()->route('Portfolio.index');
        }
        
    }
}
