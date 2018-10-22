<?php

namespace App\Http\Controllers\Job\dashboard\candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    //
    public function dashboard(){
    	return view('frontend.JobPortal.dashboards.candidate.modules.dashboard');
    }
}
