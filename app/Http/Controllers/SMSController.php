<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sms;
use Nexmo;

class SMSController extends Controller
{
    //
    public function index(Request $request){
        Nexmo::message()->send([
            'to'   => $request->phone_number,
            'from' => env('NEXMO_NUMBER'),
            'text' => $request->message
            ]);
        $save = sms::create([
            'full_names' => $request->full_names,
            'phone_number' => $request->phone_number,
            'content' => $request->message,
        ]);
        if($save)
            return redirect()->back()->with(['success'=>'Message sent successfully to '.$request->full_names]);
        else
            return redirect()->back()->with(['error'=>'Message not sent']);
    }
}
