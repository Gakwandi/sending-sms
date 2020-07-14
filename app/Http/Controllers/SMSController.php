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
        return 'sent';
    }
}
