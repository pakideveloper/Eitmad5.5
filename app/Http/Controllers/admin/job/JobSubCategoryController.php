<?php

namespace App\Http\Controllers\admin\job;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Job_SubCategory;
use App\Job_Category;
class JobSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jscategory = Job_SubCategory::all();
        return view('admin/job/modules/sub_categories/viewSubCategories',compact('jscategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jcategory = Job_Category::all();
        return view('admin/job/modules/sub_categories/create-sub',compact('jcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $jscategory = new Job_SubCategory();
        $jscategory->job_category_id = $request->jcategory;
        $jscategory->job_sub_category_name = $request->jscategory;
        $jscategory->save();
        return Redirect()->back()->with('status', 'Job Sub_Category added successfully!');
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
        $jscategory = Job_SubCategory::find($id);
        $jcategory = Job_Category::all();
        return view('admin/job/modules/sub_categories/editsubcategory', compact('jscategory','jcategory'));
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
        $jscategory = Job_SubCategory::find($id);
        $jscategory->job_category_id = $request->jcategory;
        $jscategory->job_sub_category_name = $request->jscategory;
        $jscategory->update();
        return Redirect()->back()->with('status', 'Job SubCategory Updated successfully!');
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
      $jscategory = Job_SubCategory::find($id);
      $jscategory->delete();

      return Redirect()->back()->with('status', 'Job SubCategory Deleted successfully!');
    }
}
