<?php

namespace App\Http\Controllers\Ecommerce\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
   
    public function dashboard(){
    	return view('frontend.ecommerce.dashboards.User.modules.dashboard');
    }
}
