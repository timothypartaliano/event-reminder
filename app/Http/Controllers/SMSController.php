<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SMSController extends Controller
{
    public function sendSMS(Request $request)
    {
        try {
            $account_sid = env('TWILIO_SID');
            $account_token = env('TWILIO_TOKEN');
            $number = env('TWILIO_FROM');

            $client = new Client($account_sid, $account_token);
            $client->messages->create('+62'.$request->number,[
                'from'=>$number,
                'body'=>$request->message
            ]);

            // return "Message sent...";
            return redirect('/dashboard/sms')->with('success', 'Reminder has been sent!');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
