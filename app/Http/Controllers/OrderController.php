<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function storeOrder(Request  $request,$id)
    {
//        dd($request->all());

        $payment_data = [
            'product_name' => $request->get('product_name'),
            'user_name' => $request->get('user_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'name' => $request->get('name'),
            'card_number' => $request->get('card_number'),
            'buy_date' => $request->get('buy_date'),
            'cvv_cvc' => $request->get('cvv_cvc'),
            'order_no' => $request->get('order_no'),
            'price' => $request->get('price'),
        ];

        $status = Order::insert($payment_data);
        dd($status);

    }
}
