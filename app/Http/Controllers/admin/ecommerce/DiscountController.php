<?php

namespace App\Http\Controllers\admin\ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Discount;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts = Discount::all();
        return view('admin/ecommerce/modules/discounts/index', compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/ecommerce/modules/discounts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validation($request);
      
       
        $discount= new Discount();
        $discount->discount_name =$request -> Input('discount_name');
        $discount->discount_percent =$request -> Input('discount_percent');
         $discount->discount_type =$request -> Input('discount_type');

        $discount ->save();

        
          //Alert::success('Inserted', 'Record Inserted successfully');    
        return Redirect()->back()->with('status', 'Discount added successfully!');
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
         $discount=Discount::find($id);
        $discount->discount_name=$request->input('discount_name');
        $discount->discount_type=$request->input('discount_type');
        $discount->discount_percent=$request->input('discount_percent');
    
        $discount->update();

        // Alert::success('Updated', 'Record Updated successfully');  
       return Redirect()->back()->with('status', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s= Discount::find($id);
        
        $s->delete();
       // Alert::success('Deleted', 'Record deleted successfully');
        return Redirect()->back()->with('status', 'Record deleted successfully!');
    }

     public function validation(Request $request)
    {
         $messages = [
            'discount_name.required' => 'please insert discount name.',
            'discount_percent.required' => 'please enter discount percentage%.'
            
        ];
        $this->validate($request, [
            'discount_name' => 'required',
            'discount_percent' => 'required'          
        ],$messages);

    }
}
