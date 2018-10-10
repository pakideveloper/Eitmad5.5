<?php

namespace App\Http\Controllers\Ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentCheckoutController extends Controller
{
    //
    public function callback(Request $request)
    {
         
    dd($request->all());
}
}