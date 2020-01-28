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
        return view('admin.addteam.index', compact('ourteams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addteam.create');   
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
            session()->flash('message','Added Successfully');
            return view('admin.addteam.create');
        }
        if ($request->hasfile('file')) {
            $imagename = $request->file->getClientOriginalName();
            $request->file->move(public_path('images/upload'), $imagename);
            $newteam->image_name = $imagename;
            $newteam->save();
            session()->flash('message','Added Successfully');
            return view('admin.addteam.create');
        }
        else{
            session()->flash('message','file not selected');
            return view('admin.addteam.create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
