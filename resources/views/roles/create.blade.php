@extends('layouts.master')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row mt-3">
                <div class="col-md-10">
                    <h4>Create Role</h4>
                </div>
                <div class="col-md-2">
                <a href="{{route('roles.index')}}" class="btn btn-primary" style="float:right;"><i class="fa-solid fa-backward"></i>Back</a>
                </div>    
            </div>
            <div class="card cardshade">
            <form action="{{route('role.store')}}" method="get">
                @csrf
                <div class="container">
                    <div class="row" style="padding-top:30px;">
                        <div class="col-md-5 ">
                            <label for="" class="labelsize">Role Name:*</label><br>
                            <input type="text" name="name" placeholder="Role Name" size=50px  class="form-control">
                        </div>
                        @error('name')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                        @error('permissions')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <label for="" class="labelsize">Permissions:*</label><br>
                        </div>
                    </div>
                    <div class="row mt-3"> 
                        <div class="col-md-12">
                            @foreach ($permissions as $permission)
                                <input class="larger" type="checkbox" id="{{ $permission->id }}" name="permissions[]" value="{{ $permission->id }}">
                                <label for="{{ $permission->id }}">{{ $permission->name }}</label>
                                <br>
                            @endforeach
                        </div>    
                    </div>

                    <div class="row m-3">
                        <div class="col-md-5">
                            <div class="text-center">
                                <button class="btn btn-primary btnsize" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            
                        
        </div>
    </main>

@endsection('content')
    
                   <!-- <div class="row mt-5">
                        <div class="col-md-12">
                            <label for="" class="labelsize">Permissions:*</label><br>
                            <div class="row mt-3">
                                <div class="col-md-1">
                                    <label for="">Others</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="checkbox" name="" id="othersall" class="larger">
                                    <label for="">Select All</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="checkbox" name="check[]" id="service" class="larger" value="Service staff">
                                    <label for="">Service staff</label><br>
                                    <input type="checkbox" name="check[]" id="viewbuttons" class="larger" value="View export to buttons (excel/print/pdf) on tables">
                                    <label for="">View export to buttons (excel/print/pdf) on tables</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-3">
                                <div class="col-md-1">
                                    <label for="">User</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="checkbox" name="" id="userall" class="larger">
                                    <label for="">Select All</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="checkbox" name="check[]" id="viewuser" value="View User" class="larger">
                                    <label for="">View user</label><br>
                                    <input type="checkbox" name="check[]" id="adduser" value="Add User" class="larger">
                                    <label for="">Add User</label><br>
                                    <input type="checkbox" name="check[]" id="edituser" value="Edit User" class="larger">
                                    <label for="">Edit User</label><br>
                                    <input type="checkbox" name="check[]" id="deleteuser" value="Delete User" class="larger">
                                    <label for="">Delete User</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-3">
                                <div class="col-md-1">
                                    <label for="">Roles</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="checkbox" name="" id="roleall" class="larger">
                                    <label for="">Select All</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="checkbox" name="check[]" id="viewrole" value="View Role" class="larger">
                                    <label for="">View Role</label><br>
                                    <input type="checkbox" name="check[]" id="addrole" value="Add Role" class="larger">
                                    <label for="">Add Role</label><br>
                                    <input type="checkbox" name="check[]" id="editrole" vlaue="Edit Role" class="larger">
                                    <label for="">Edit Role</label><br>
                                    <input type="checkbox" name="check[]" id="deleterole" value="Delete Role" class="larger">
                                    <label for="">Delete Role</label>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    
                    