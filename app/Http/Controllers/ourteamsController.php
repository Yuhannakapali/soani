<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ourteam;



class ourteamsController extends Controller
{   
    
    
    
    protected $dir = 'images/upload';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas  =  Ourteam::all();
        return view('admin.ourteam.index', compact('datas'));
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
    
        $request->validate([
        'name' => 'required|max:100|min:3',
        'designation' => 'required|max:100|min:3',
        'file'=>'required|mimes:jpeg,png,gif,jpg|max:2048'
        ]);
        
        $newteam = new Ourteam();
        $newteam->name = $request->name;
        $newteam->designation = $request->designation;
        $newteam->type = $request->select;
        $image = $request->file('file');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = $this->dir;
        $image->move($destinationPath, $name);
        $newteam->image_name = $name;
        $newteam->save();
        session()->flash('message','added sucessfully');
        Session()->flash('alert-class', 'success');
        return redirect()->route('ourteams.create');
    
        
        

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
        $request->validate([
            'name' => 'required|max:100|min:3',
            'designation' => 'required|max:100|min:3',
            'file'=>'mimes:jpeg,png,gif,jpg|max:2048'
            ]);
            
            $ourteam= Ourteam::find($id);
            $ourteam->name = $request->name;
            $ourteam->designation = $request->designation;
            $ourteam->type = $request->select;
        
        if ($request->hasfile('file')) {
            $image = $request->file('file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = $this->dir;
            $image->move($destinationPath, $name);
            $ourteam->image_name = $name;
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
            Session()->flash('message','deleted sucessfully');
            Session()->flash('alert-class', 'success');
            return redirect()->route('ourteams.index');
        }
        else{
            Session()->flash('message','Already deleted just reload');
            Session()->flash('alert-class', 'error');
            return redirect()->route('ourteams.index');
        }
        
    }
}
