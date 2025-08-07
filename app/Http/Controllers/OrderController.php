<?php

namespace App\Http\Controllers;

use App\Interfaces\PaymentGatewayInterface;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function checkout(PaymentGatewayInterface $paymentGateway, Request $request){
        $paymentGateway->charge(499.99);
    }
}
