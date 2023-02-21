<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles=Role::all();
        return view('roles.index')->with('roles',$roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permissions=Permission::all();
        return view('roles.create')->with('permissions',$permissions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        $request->validate([
            'name'=>'required',
            'permissions'=>'required'
        ],
        [
            'name.required'=>'Please fill role name',
            'permissions.required'=>'Please check permissions'
        ]);

        $role = Role::create([
            'name' => $request->name
        ]);
    
        $role->permissions()->attach($request->permissions);
    
        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
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
        $permissions=Permission::all();
        $role=Role::find($id);
        return view('roles.edit')->with('role',$role)->with('permissions',$permissions);
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
        //dd($request);
        $request->validate([
            'name'=>'required',
            'permissions'=>'required'
        ],
        [
            'name.required'=>'Please fill role name',
            'permissions.required'=>'Please check permissions'
        ]);

        
        $role=Role::find($id);
        //dd($role);

        $role->permissions()->sync($request->permissions);

        //$role->permissions()->attach($request->all());
    
        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
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
        $role=Role::find($id);
        $role->delete();
        return redirect()->route('roles.index')->with('success','Role deleted successfully');
    }
}
