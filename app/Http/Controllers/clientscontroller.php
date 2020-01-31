<?php

namespace App\Http\Controllers;

use App\client;
use Illuminate\Http\Request;

class clientscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients  =  client::all();
        return view('admin.clients.index', compact('clients'));
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
        $newclient = new client();
        $newclient->name = $request->name;
        $newclient->url = $request->url;

        
        if ($request->hasfile('file')) {
            $imagename = $request->file->getClientOriginalName();
            $request->file->move(public_path('images/upload'), $imagename);
            $newclient->image_name = $imagename;
            $newclient->save();
            session()->flash('message','Added Successfully');
            return view('admin.clients.create');
        }
        else{
            session()->flash('message','file not selected');
            return view('admin.clients.create');
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
        $clients= client::find($id);
        $clients->name = $request->name;
        if ($request->hasfile('file')) {
            $imagename = $request->file->getClientOriginalName();
            $request->file->move(public_path('images/upload'), $imagename);
            $clients->image_name = $imagename;
            $clients->save();
            session()->flash('message','image changed');
            return redirect()->route('clients.index');
        }
        else{
            $clients->save();
            session()->flash('message','Updated');
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
        $client->delete();
        session()->flash('message','delete Successfully');
        return redirect()->route('clients.index');
    }
}
