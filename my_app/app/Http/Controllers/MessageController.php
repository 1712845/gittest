<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
     public function send(Request $request)
    {
       $message = new Message();
       $message ->name = $request->input('name');
       $message ->email = $request->input('email');
       $message ->address = $request->input('address');
       $message ->message = $request->input('message');
       $message ->phone = $request->input('phone');
       $message ->save();
       return redirect('contact')->with('success','Đã lưu vào database  thành công');
    }   

    public function getAllMessages()
    {
       $messages = Message::all();
       return view('messages',['messages'=> $messages]);
    }
}
