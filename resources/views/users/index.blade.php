@extends('layouts.master')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row mt-3">
                            <div class="col-md-10">
                                <h4>All Users</h4>
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active">Manage Users</li>
                                </ol>
                            </div>
                            <div class="col-md-2">
                                <a href="{{route('users.create')}}" class="btn btn-primary " style="float:right;"><i class="fa-solid fa-plus"></i>Add</a>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <a href="{{route('users.excel')}}" class="btn btn-primary">Excel</a>
                                <a href="{{route('users.print')}}" class="btn btn-primary btnprint">To Print</a>
                                <a href="{{route('users.pdf')}}" class="btn btn-primary">Pdf</a>
                            </div>
                        </div>

                        <div class="row">
                           
                            <div class="col-md-12">
                                <table class="table table-stripped" id="datatablesSimple">
                                    <thead>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->role->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                @csrf
                                                <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning "><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{route('users.delete',$user->id)}}" class="btn btn-danger m-3" ><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>

                    
                </main>
@endsection('content')