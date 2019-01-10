<?php

namespace App\Http\Controllers\Job;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Company;
use App\CEO_Info;
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
        $this->registartion_validation($request);

        $ceo= new CEO_Info();
        $ceo->ceo_name =$request -> Input('ceo_name');
        $ceo->ceo_contact =$request -> Input('ceo_contact');
        $ceo->ceo_email =$request -> Input('ceo_email');
        $ceo->ceo_cnic =$request -> Input('ceo_cnic');
        $ceo->save();


         $company= new Company();
         $company->id = Auth::user()->id;
        $company->company_name =$request -> Input('company_name');
        $company->company_description =$request -> Input('company_description');
        $company->company_address =$request -> Input('company_address');
        $company->city_id =$request -> Input('city_id');
        $company->contact_email =$request -> Input('contact_email');
        $company->contact_person =$request -> Input('contact_person');
        $company->company_url =$request -> Input('company_url');
        $company->company_phone =$request -> Input('company_phone');
        $company->ownership_type =$request -> Input('ownership_type');
        $company->no_of_employees =$request -> Input('no_of_employees');
        $company->operating_since =$request -> Input('operating_since');
        $company->secp_id =$request -> Input('secp_id');
        $company->company_ceo_id =$ceo->id;
        $company->cr_designation =$request -> Input('cr_designation');
        $company->industry_id =$request -> Input('industry_id');
        $company->created_by = '1';
    
        $image=$request->company_logo; 
        // print_r($image);
        // die();
         $uniqid =uniqid();
                $file_name = $image -> getClientOriginalName();
                $file_name = $uniqid.$file_name;
                $file_type = $image->getClientOriginalExtension();            
                $file_size = File::size($image);   
                $new_path = url('/').'/public/JobPortal_Frontend/assets/images/company/'.$file_name;
                $image -> move(public_path().'/JobPortal_Frontend/assets/images/company/', $file_name);
                // Storage::move(public_path().'/backendAssets/assets/images/services/'.$file_name, public_path().'/backendAssets/assets/images/services/'.$file_name);
                $company->company_logo = $file_name;
                $company->logo_size = $file_size;
                $company->logo_path = $new_path;

         
        $company ->save();
        return Redirect()->back()->with('status', 'Company registration request has been sent to admin for approval successfully!');
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
