@extends('layouts.master')
@section('content')
    <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row mt-3">
                <div class="col-md-10">
                    <h4>Edit User</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{route('users.index')}}" class="btn btn-primary" style="float:right;"><i class="fa-solid fa-backward"></i>Back</a>
                </div>    
            </div>
            <div class="card cardshade">
            <form action="{{route('users.update',$user->id)}}" method="get">
                @csrf
                <div class="container">
                    <div class="row" style="padding-top:30px;">
                        <div class="col-md-5 ">
                            <label for="" class="labelsize">Name:*</label><br>
                            <input type="text" name="name" placeholder="Please Enter Your Name" value="{{$user->name}}" size=50px  class="form-control">
                
                        </div>
                        @error('name')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-5">
                            <label for="" class="labelsize">Username:*</label><br>
                            <input type="text" name="username" placeholder="Please Enter Username" value="{{$user->username}}" size=40px  class="form-control">
                        </div>
                        @error('username')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-5">
                            <label for="" class="labelsize">Email:*</label><br>
                            <input type="text" name="email" placeholder="Email" value="{{$user->email}}" size=40px  class="form-control"><br>
                            @error('email')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                            <input type="checkbox" name="is_active" class="larger"> 
                            <label for="">Is active?</label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-5">
                            <label for="" class="labelsize">Mobile Number:*</label><br>
                            <input type="text" name="phone" placeholder="Mobile Number" value="{{$user->phone}}" size=40px  class="form-control">
                        </div>
                        @error('phone')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-5">
                            <label for="" class="labelsize">Gender:*</label><br>
                            <select name="gender" id="" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-5">
                            <label for="" class="labelsize">Role:*</label><br>
                            <select name="role_id" id="" class="form-control">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}" 
                                    @if($role->id==$user->role->id)
                                        selected
                                    @endif>
                                        {{$role->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-5">
                            <label for="" class="labelsize">Password:*</label><br>
                            <input type="password" name="password" placeholder="Password" value="{{$user->password}}" size=40px  class="form-control">
                        </div>
                        @error('password')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="row m-5">
                        <div class="col-md-5 text-center">
                            
                            <button class="btn btn-primary btnsize">Save</button>
                            
                        </div>
                    </div>
                </div>
            </form>
            </div>
                        
        </div>
    </main>

    
@endsection('content')