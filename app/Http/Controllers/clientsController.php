<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class clientscontroller extends Controller
{   
    protected $dir ='images/upload';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas  =  client::all();
        return view('admin.clients.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
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
            'name' => 'required|unique:clients|max:50|min:3',
            'url' => 'required|min:3',
            'file'=>'required|mimes:jpeg,png,gif,jpg|max:2048'
            ]);
        $newclient = new client();
        $newclient->name = $request->name;
        $newclient->url = $request->url;
        $image = $request->file('file');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = $this->dir;
        $image->move($destinationPath, $name);
        $newclient->image_name = $name;
        $newclient->save();
        session()->flash('message','added sucessfully');
        Session()->flash('alert-class', 'success');
        return redirect()->route('clients.create');
    
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member  =  client::find($id);
        return view('admin.clients.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Client::find($id);
        return view ('admin.clients.edit', compact('member'));
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
            'name' => 'required|max:50|min:3',
            'url' => 'required',
            'file'=>'mimes:jpeg,png,gif,jpg|max:2048'
            ]);
        $clients= client::find($id);
        $clients->name = $request->name;
        $clients->url = $request->url;
        if ($request->hasfile('file')) {
            $image = $request->file('file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = $this->dir;
            $image->move($destinationPath, $name);
            $clients->image_name = $name;
            $clients->save();
            session()->flash('message','updated sucessfully');
            Session()->flash('alert-class', 'success');
            return redirect()->route('clients.index');
        }
        else{
            $clients->save();
            session()->flash('message','updated sucessfully');
            Session()->flash('alert-class', 'success');
            return redirect()->route('clients.index');
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
        $client = client::find($id);
        if ($client != null){
            $client->delete();
            Session()->flash('message','delete sucessfully');
            Session()->flash('alert-class', 'success');
            return redirect()->route('clients.index');
        }
        else{
            Session()->flash('message','Already deleted just reload');
            Session()->flash('alert-class', 'error');
            return redirect()->route('clients.index');
        }
    }
}
