<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Mail;
use App\Mail\contact;


class MessageController extends Controller
{
    public function create(){
        return view('user.contact', ['pagename'=>'Contact us']);
    }
   
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email ',
            'message'=>'required',

        ]);
        $mail = new Message();
        $mail->name = $request->name;
        $mail->phone = $request->phone;
        $mail->email = $request->email;
        $mail->message = $request->message;
        $mail->save();

        $details = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::send(new contact($details));

        return view('user.contact', ['pagename'=>'Contact us']);

    }
    
    public function index()
    {
        $datas  =  Message::all();
        return view('admin.message.index', compact('datas'));
    }
}   

