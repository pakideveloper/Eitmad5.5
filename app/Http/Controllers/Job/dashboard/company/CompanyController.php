<?php

namespace App\Http\Controllers\Job\dashboard\company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function dashboard(){
    	return view('frontend.JobPortal.dashboards.company.modules.dashboard');
    }
}
