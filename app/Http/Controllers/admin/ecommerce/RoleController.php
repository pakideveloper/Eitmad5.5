<?php

namespace App\Http\Controllers\admin\ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use Redirect; 
use DB;
use Alert;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles =Role::all();
        //return view('backend/modules/roles/index',compact('roles'));
        return view('admin/ecommerce/modules/roles/index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions=Permission::all();
        return view('admin/ecommerce/modules/roles/create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo $request -> name  ;
        echo $request -> display_name  ;
        echo $request -> description  ;
        //echo $request -> permission  ;
        
        
        //die();
         $this->validate($request, [
        
    'name' => 'required',
    'display_name' => 'required',
    'description' => 'required',
    'permission' => 'required',
    ]);

         
        $role = Role::create($request -> except(['permissions','_token']));
        foreach ($request -> permission as $key => $value) {
            $role -> attachPermission($value);
        }

        // Alert::success('Created.','feature created successfully');
        return Redirect()->back()->with('status', 'Role created successfully!');
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
      $role = Role::find($id);
      $permissions = Permission::all();
      $role_permissions = $role->perms()->pluck('id','id')->toArray();
      return view('backend/modules/roles/edit',compact(['role','permissions','role_permissions']));
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
    $this->validate($request, [
    'name' => 'required',
    'display_name' => 'required',
    'description' => 'required',
    'permission' => 'required',
    ]);
        
        $role = Role::find($id);
        $role -> name = $request -> name;
        $role -> display_name = $request -> display_name;
        $role -> description = $request -> description;
        $role -> save();

        DB::table('permission_role')->where('role_id',$id)->delete();

        foreach ($request -> permission as $key => $value) {
            $role -> attachPermission($value);
        }

        Alert::success('Updated.','Feature updated successfully');
        return Redirect('/admin/roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('roles')->where('id',$id)->delete();
        
       
        Alert::success('Deleted.','Feature deleted successfully');
        return Redirect()->back();
    }
}
