<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ourteam;

class ourteamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourteams  =  Ourteam::all();
        return view('admin.ourteam.index', compact('ourteams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ourteam.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

        $newteam = new Ourteam();
        $newteam->name = $request->name;
        $newteam->designation = $request->designation;
        
        $board = $request->checker;
        $executive = $request->checker1;

        if($board == '1'){
                $newteam->board_of_director = 1;
        }
      
        else{
            $newteam->board_of_director = 0;
        }
        
        if($executive == '1'){
            $newteam->executive_team = 1;
        }
  
        else{
            $newteam->executive_team = 0;
        }
        if ($board != 1 && $executive != 1 ) {
            session()->flash('message','no check box selected');
            Session()->flash('alert-class', 'alert-danger');
            return redirect()->route('ourteams.create');
        }
        if ($request->hasfile('file')) {
            $imagename = $request->file->getClientOriginalName();
            $request->file->move(public_path('images/upload'), $imagename);
            $newteam->image_name = $imagename;
            $newteam->save();
            session()->flash('message','added sucessfully');
            Session()->flash('alert-class', 'alert-success');
            return redirect()->route('ourteams.create');
        }
        else{
            session()->flash('message','file not selected');
            Session()->flash('alert-class', 'alert-danger');
            return redirect()->route('ourteams.create');
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
        $member  =  ourteam::find($id);
        return view('admin.ourteam.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Ourteam::find($id);
        return view ('admin.ourteam.edit', compact('member'));
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
        $ourteam= Ourteam::find($id);
        $ourteam->name = $request->name;
        $ourteam->designation = $request->designation;
        $board = $request->checker;
        $executive = $request->checker1;

        if($board == '1'){
                $ourteam->board_of_director = 1;
        }
      
        else{
            $ourteam->board_of_director = 0;
        }
        
        if($executive == '1'){
            $ourteam->executive_team = 1;
        }
  
        else{
            $ourteam->executive_team = 0;
        }
        if ($request->hasfile('file')) {
            $imagename = $request->file->getClientOriginalName();
            $request->file->move(public_path('images/upload'), $imagename);
            $ourteam->image_name = $imagename;
            $ourteam->save();
            session()->flash('message','Updated sucessfully');
            Session()->flash('alert-class', 'alert-success'); 
            return redirect()->route('ourteams.index');
        }
        else{
            $ourteam->save();
            session()->flash('message','Updated sucessfully');
            Session()->flash('alert-class', 'alert-success'); 
            return redirect()->route('ourteams.index');
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
        $ourteam = ourteam::find($id);
        if ($ourteam != null){
            $ourteam->delete();
            Session()->flash('message','delete sucessfully');
            Session()->flash('alert-class', 'alert-danger');
            return redirect()->route('ourteams.index');
        }
        else{
            Session()->flash('message','Already deleted just reload');
            Session()->flash('alert-class', 'alert-danger');
            return redirect()->route('ourteams.index');
        }
        
    }
}
