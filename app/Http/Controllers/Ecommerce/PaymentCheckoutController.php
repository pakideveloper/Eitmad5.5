<?php

namespace App\Http\Controllers\Ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentCheckoutController extends Controller
{
    //
    public function callback(Request $request)
    {
         
    // dd($request->all());
    	$hashSecretWord = 'hassan'; //2Checkout Secret Word
$hashSid = 901394952; //2Checkout account number
$hashTotal = $_REQUEST['total']; //Sale total to validate against
$hashOrder = $_REQUEST['order_number']; //2Checkout Order Number
$StringToHash = strtoupper(md5($hashSecretWord . $hashSid . $hashOrder . $hashTotal));

if ($StringToHash != $_REQUEST['key']) {
	$result = 'Fail - Hash Mismatch'; 
	} else { 
	$result = 'Success - Hash Matched';
}

echo $result;
}
}