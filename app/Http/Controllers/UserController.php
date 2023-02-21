<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::All();
        //dd($users);
        return view('users.index')->with('users',$users);
    }


    public function printexcel()
    {
        $users=User::All();
        return view('users.excel')->with('users',$users);
    }

    public function printview()
    {
        $users=User::All();
        return view('users.print')->with('users',$users);
    }


    public function exportpdf()
    {
        $users = User::All();
        return view('users.pdf')->with('users',$users);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles=Role::all();
        return view('users.create')->with('roles',$roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //$isChecked = $request->has('is_active');
        //dd($isChecked);
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'password'=>'required'
        ],
        [
            'name.required'=>'Please fill name',
            'username.required'=>'Please fill username',
            'email.required'=>'Please fill email',
            'email.email'=>'Email format (example@gmail.com)',
            'phone.required'=>'Please fill phone',
            'password.required'=>'Please fill password'
        ]);

        $user=$request->all();
        //dd($user);
        if($user['is_active']=="on")
        {
            $user['is_active']=1;
        }
        else
        {
            $user['is_active']=0;
        }
        //dd($user);
        User::create($user);
        return redirect()->route('users.index');
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
        $roles=Role::all();
        $user=User::find($id);
        return view('users.edit')->with('user',$user)->with('roles',$roles);
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
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'password'=>'required'
        ],
        [
            'name.required'=>'Please fill name',
            'username.required'=>'Please fill username',
            'email.required'=>'Please fill email',
            'email.email'=>'Email format (example@gmail.com)',
            'phone.required'=>'Please fill phone',
            'password.required'=>'Please fill password'
        ]);

        $userinfo=$request->all();

        if($userinfo['is_active']=="on")
        {
            $userinfo['is_active']=1;
        }
        else
        {
            $userinfo['is_active']=0;
        }
        
        $user=User::find($id);
        $user->update($userinfo);
        return redirect()->route('users.index');

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
        $user=User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success','User deleted successfully');
    }
}
