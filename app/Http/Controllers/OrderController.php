<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function storeOrder(Request  $request,$id)
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
        if($status){
            //$status->phone
            //$email
            //sms
            //mail
        }

    }
}
