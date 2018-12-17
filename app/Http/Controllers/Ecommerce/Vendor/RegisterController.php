<?php

namespace App\Http\Controllers\Ecommerce\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vendor;
use App\User;
use App\Role;
use Auth;
use File;

class RegisterController extends Controller
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
        // print_r($request->logo);
        // die();
        
        // print_r($role);
        // die();
        // $user->attachRole($admin);
        
        $this->storeValidate($request);
        $vendor = new Vendor();        
        if (Auth::guest()){
            $user = new User();
            $user->first_name=$request->first_name;
            $user->last_name=$request->last_name;
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->save();
            $vendor->user_id = $user->id;
        }else{
            $vendor->user_id = Auth::user()->id;
        }
        
        
        $vendor->vendor_name = $request->name;
        $vendor->vendor_description = $request->description;


        $logo = $request->logo;
        $file_name = $logo -> getClientOriginalName();
        $file_name = uniqid().$file_name;
        $file_type = $logo->getClientOriginalExtension(); 
        
        $file_size = File::size($logo);
        $file_size = $file_size/1000;
        $file_size = $file_size.' '.'kb';
        $new_path = url('/').'/public/frontend/registration/vendor/logo/'.$file_name;
        $logo -> move(public_path().'/frontend/registration/vendor/logo/', $file_name);
        $vendor->vendor_logo = $file_name;
        $vendor->logo_size = $file_size;
        $vendor->logo_path = $new_path;
        $vendor->logo_extension = $file_type;  


        $vendor->vendor_email = $request->vendor_email;      // $vendor->vendor_password = ;
        $vendor->vendor_contact = $request->contact;
        $vendor->vendor_url = $request->url;
        $vendor->vendor_fax_no = $request->fax_no;
        $vendor->vendor_reg_no   = $request->reg_no;
        $vendor->person_incharge = $request->person_incharge;
        $vendor->incharge_contact = $request->incharge_contact;
        $vendor->incharge_email = $request->incharge_email;
        $vendor->incharge_cnic = $request->incharge_cnic;


        $cnic_front = $request->cnic_front;
        $file_name = $cnic_front -> getClientOriginalName();
        $file_name = uniqid().$file_name;
        $file_type = $logo->getClientOriginalExtension(); 
        $new_path = url('/').'/public/frontend/registration/vendor/CNICBackImage/'.$file_name;
        $cnic_front -> move(public_path().'/frontend/registration/vendor/CNICBackImage/', $file_name);
        $vendor->cnic_front_path = $new_path;
        $vendor->cnic_front_extension = $file_type;


        $cnic_back = $request->cnic_back;
        $file_name = $cnic_back -> getClientOriginalName();
        $file_name = uniqid().$file_name;
        $file_type = $logo->getClientOriginalExtension(); 
        $new_path = url('/').'/public/frontend/registration/vendor/CNICFrontImage/'.$file_name;
        $cnic_back -> move(public_path().'/frontend/registration/vendor/CNICFrontImage/', $file_name);
        $vendor->cnic_back_path = $request->cnic_back;
        $vendor->cnic_back_extension = $file_type;
        $vendor->save();
        $role = Role::where('name','vendor')->first();
        $user->attachRole($role);
        return Redirect('ecommerce/vendor/dashboard');
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
    public function storeValidate(Request $request){
        
        $messages = [
            'name.required' => 'please insert company name',
            'description.required' => 'please insert description',
            'logo.required' => 'logo is compulsory',
            'vendor_email.required' => 'please insert email',
            'contact.required' => 'please insert contact no',
            'fax_no.required' => 'please insert fax No.',
            'reg_no.required' => 'please insert registration No.',
            'person_incharge.required' => 'please insert person incharge name ',
            'incharge_contact.required' => 'please insert incharge contact No.',
            'incharge_email.required' => 'please insert person incharge email',
            'incharge_cnic.required' => 'please insert person incharge CNIC',
            'cnic_front.required' => 'please upload CNIC front image',
            'cnic_back.required' => 'please upload CNIC back image'            
        ];
        $required_array = [
            'name' => 'required',
            'description' => 'required',
            'logo' => 'required',
            'vendor_email' => 'required|string|email|max:255|unique:vendors',
            'contact' => 'required',
            'fax_no' => 'required',
            'reg_no' => 'required',
            'person_incharge' => 'required',
            'incharge_contact' => 'required',            
            'incharge_email' => 'email|required',            
            'incharge_cnic' => 'required',            
            'cnic_front' => 'required',            
            'cnic_back' => 'required',          
        ];
        if (Auth::guest()) {

            $messages['first_name.required'] = 'please insert first name';
            $messages['last_name.required'] = 'please insert your last name';
            $messages['email.required'] = 'please insert your email';
            $messages['password.required'] = 'please select a password';

            // $messages = [
            //     'first_name.required' => 'please insert first name',
            //     'last_name.required' => 'please insert your last name',
            //     'user_email.required' => 'please insert your email',
            //     'password.required' => 'please select a password'
            // ];

            $required_array['first_name'] = 'required|string|max:255';
            $required_array['last_name'] = 'required|string|max:255';
            $required_array['email'] = 'required|string|email|max:255|unique:users';
            $required_array['password'] = 'required|string|min:6|confirmed';
            
        }
        $this->validate($request, $required_array ,$messages);
    }
    
}
