<?php

namespace App\Http\Controllers\Job;

use Illuminate\Http\Request;
use DB;
use App\Company;
use File;
use Illuminate\Html\HtmlBuilder;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Redirect;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function registartion_validation(Request $request)
    {
         $messages = [
            'company_name.required' => 'please insert company name.',
            'company_description.required' => 'please enter company description.',
            'company_address.required' => 'please insert company address.',
            'city_id.required' => 'please select city.',
            'country.required' => 'please select country.',
            'contact_email.required' => 'please insert company contact email.',
            'company_phone.required' => 'please enter company contatct number.',
            'industry_id.required' => 'please select industry.',
             'ownership_type.required' => 'please select ownership type.',
            'ceo_name.required' => 'please insert company CEO name.',
            'cr_designation.required' => 'please enter your desination.'
            
        ];
        $this->validate($request, [
            'company_name' => 'required',
            'company_description' => 'required',
            'company_address' => 'required',
            'city_id' => 'required',
            'country' => 'required',
            'contact_email' => 'required',
            'company_phone' => 'required',
            'industry_id' => 'required',
            'ownership_type' => 'required',
            'ceo_name' => 'required',
            'cr_designation' => 'required'           
        ],$messages);

    }
}
