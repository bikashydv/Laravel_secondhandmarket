<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Payment</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

@php
$order_no = rand(8,100000);
@endphp

<form method="post" enctype="multipart/form-data" action="{{ route('product.order',$product->id) }}">
    @csrf
    <div class="container-fluid px-1 px-md-2 px-lg-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-sm-11">
                <div class="card border-0">
                    <div class="row justify-content-center">
                        <h3 class="mb-4">Credit Card Checkout</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 border-line pb-3">
                            <small class="text-sm text-muted">You're buying</small>
                            <h2 class=""><span name="product" class="text-secondary">{{ $product->name }}<input
                                        type="hidden" name="product_name" value="{{ $product->name }}"></span></h2>
                        </div>
                        <div class="col-sm-7 border-line pb-3">
                            <small class="text-sm text-muted">User Name</small>
                            <h2 class=""><span
                                    class="text-secondary">{{ \Illuminate\Support\Facades\Auth::check() ?  \Illuminate\Support\Facades\Auth::user()->name : '' }}
                                <input type="hidden" name="user_name" value="{{ \Illuminate\Support\Facades\Auth::check() ?  \Illuminate\Support\Facades\Auth::user()->name : '' }}"></span>
                            </h2>
                        </div>
                        <div class="col-sm-7 border-line pb-3">
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">Email</p> <input type="email" name="email"
                                                                                    placeholder="Email" size="15">
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">Phone</p> <input type="phone" name="phone" value="9806892006"
                                                                                    placeholder="phone number "
                                                                                    size="15">
                            </div>

                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">Name on the card</p> <input type="text" name="name"
                                                                                               placeholder="Name"
                                                                                               size="15">
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">Card Number</p>
                                <div class="row px-3"><input type="text" name="card-num"
                                                             placeholder="0000 0000 0000 0000" size="18" id="cr_no"
                                                             minlength="19" maxlength="19">
                                    <p class="mb-0 ml-3">/</p> <img class="image ml-1"
                                                                    src="https://i.imgur.com/WIAP9Ku.jpg">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">Date of buying</p> <input type="date"  name="buy_date"
                                                                                             placeholder="MM/YY"
                                                                                             size="6"
                                                                                             id="exp" minlength="5"
                                                                                             maxlength="5">
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">CVV/CVC</p> <input type="number" name="cvv_cvc"
                                                                                      placeholder="000" size="1"
                                                                                      minlength="3" maxlength="3">
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox custom-control-inline"><input id="chk1"
                                                                                                         type="checkbox"
                                                                                                         name="chk"
                                                                                                         class="custom-control-input"
                                                                                                         checked> <label
                                        for="chk1" class="custom-control-label text-muted text-sm">save my card for
                                        future payment</label></div>
                            </div>
                        </div>
                        <div class="col-sm-5 text-sm-center justify-content-center pt-4 pb-4"><small
                                class="text-sm text-muted">Order number</small>

                            <h5 class="mb-5">{{  $order_no }}</h5><small class="text-sm text-muted">Payment amount</small>
                            <input type="hidden" name="order_no" value="{{ $order_no }}">
                            <div class="row px-3 justify-content-sm-center">
                                <h2 class=""><span class="text-md font-weight-bold mr-2">$</span>
                                    <span class="text-danger">{{ $product->price }}<input type="hidden" name="price"
                                                                                          value="{{ $product->price }}"></span>
                                </h2>
                            </div>
                            <button type="submit" class="btn btn-red text-center mt-4">PAY</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<link rel="stylesheet" href="{{asset('css/payment.css')}}">
<script src="{{asset('js/payment.js')}}"></script>

</body>
</html>


