<?php

namespace App\Http\Controllers\Ecommerce\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function dashboard(){
    	return view('frontend.ecommerce.dashboards.vendor.modules.dashboard');
    }
}
