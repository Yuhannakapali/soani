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

        
    return back()->with('message', 'Thanks for your message!');

        // $url = 'https://www.google.com/recaptcha/api/siteverify';
        // $remoteip = $_SERVER['REMOTE_ADDR'];
        // $data = [
        // 'secret' => env('CAPTCHA_SECRET'),
        // 'response' => $request->get('token'),
        // 'remoteip' => $remoteip
        // ];
        // $options = [
        //     'http' => [
        //     'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        //     'method' => 'POST',
        //     'content' => http_build_query($data)
        //     ]
        // ];
        // $context = stream_context_create($options);
        // $result = file_get_contents($url, false, $context);
        // $resultJson = json_decode($result);
        
        // if ($resultJson->success != true) {
        //     return back()->withErrors(['captcha' => 'go away bot ']);
        // }
        // elseif ($resultJson->score >= 0.3) {
            
        //     $request->validate([
        //             'name' => 'required',
        //             'email' => 'required|email ',
        //             'message'=>'required',
        
        //         ]);
        //         $mail = new Message();
        //         $mail->name = $request->name;
        //         $mail->phone = $request->phone;
        //         $mail->email = $request->email;
        //         $mail->message = $request->message;
        //         $mail->save();
        
        //         $details = [
        //             'name' => $request->name,
        //             'phone' => $request->phone,
        //             'email' => $request->email,
        //             'message' => $request->message,
        //         ];
        
        //         Mail::send(new contact($details));
        
                
        //     return back()->with('message', 'Thanks for your message!');
        // } 
        // else {
        //     return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        // }
    }
    
    public function index()
    {
        $datas  =  Message::all();
        return view('admin.message.index', compact('datas'));
    }
}   

