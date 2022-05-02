<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Mockery\Exception;
use Twilio\Rest\Client;


class OrderController extends Controller
{
    public function storeOrder(Request $request, $id)
    {

        $request->validate([
            'phone' => 'required',
            'email' => 'required',
        ]);
//        dd($request->all());

        $payment_data = [
            'product_name' => $request->get('product_name'),
            'user_name' => $request->get('user_name'),
            'email' => $request->get('email'),
            'phone' => 98021786,
            'name' => $request->get('name'),
            'card_number' => $request->get('card_number'),
            'buy_date' => $request->get('buy_date'),
            'cvv_cvc' => $request->get('cvv_cvc'),
            'order_no' => $request->get('order_no'),
            'price' => $request->get('price'),
        ];

        $status = Order::create($payment_data);
        if ($status) {
            try {
//            dd( env('TWILLIO_SID'), env('TWILLIO_TOKEN'));

                // Your Account SID and Auth Token from twilio.com/console
                $sid = env('TWILLIO_SID');
                $token = env('TWILLIO_TOKEN');
                $client = new Client($sid, $token);
//            $otp = rand(100000,10000000);


                // Use the client to do fun stuff like send text messages!
                $client->messages->create(
                // the number you'd like to send the message to
                    '+9779806892006',
                    [
                        // A Twilio phone number you purchased at twilio.com/console dd($status);
                        'from' => '+16072845024',
                        // the body of the text message you'd like to send
                        'body' =>"Greetings from SecondHandBazar,Below are the details of your order.OrderNo: $status->order_no,Product is: $status->product_name,Total Price: $status->price"
                    ]
                );

            } catch (Exception $exception) {
                dd($exception);
            }
        }
return redirect()->route('home');


//        product_name,user_name, email,phone,name,card_number,buy_date,cvv_cvc,order_no,price
    }


}
