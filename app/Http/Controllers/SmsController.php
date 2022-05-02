<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Exception;
use Twilio\Rest\Client;




class SmsController extends Controller
{
    public function index ()
    {
        try {
//            dd( env('TWILLIO_SID'), env('TWILLIO_TOKEN'));

            // Your Account SID and Auth Token from twilio.com/console
            $sid =  env('TWILLIO_SID');
            $token = env('TWILLIO_TOKEN');
            $client = new Client($sid, $token);
            $otp = rand(100000,10000000);


            // Use the client to do fun stuff like send text messages!
            $client->messages->create(
            // the number you'd like to send the message to
                '+9779806892006',
                [
                    // A Twilio phone number you purchased at twilio.com/console
                    'from' => '+16072845024',
                    // the body of the text message you'd like to send
                    'body' => 'Hello, your payment is successful and your OPT is:' .$otp,
                ]
            );

        }catch (Exception $exception){
       dd($exception);
        }
        dd('here');
     }
}
