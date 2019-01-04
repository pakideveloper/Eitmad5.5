<?php

namespace App\Http\Controllers\admin\job;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Job_Category;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jcategory = Job_Category::all();
        return view('admin/job/modules/categories/viewCategories',compact('jcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin/job/modules/categories/create-parent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jcategory = new Job_Category();
        $jcategory->job_category_name = $request->job_category_name;
        $jcategory->save();
        return Redirect()->back()->with('status', 'Category added successfully!');
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
       $id = \Crypt::decrypt($id);
        $jcategory = Job_Category::find($id);
        
        return view('admin/job/modules/categories/editcategory', compact('jcategory','id'));
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
         $jcategory = Job_Category::find($id);
        $jcategory->job_category_name = $request->job_category_name;
        $jcategory->update();
         return Redirect()->back()->with('status', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $id = \Crypt::decrypt($id);
      $jcategory = Job_Category::find($id);
      $jcategory->delete();
       return Redirect()->back()->with('status', 'Category Deleted successfully!');
    }
}
