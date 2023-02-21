@extends('layouts.master')
@section('content')
        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row mt-3">
                            <div class="col-md-10">
                                <h4>All Roles</h4>
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active">Manage Roles</li>
                                </ol>
                            </div>
                            <div class="col-md-2">
                                <a href="{{route('roles.create')}}" class="btn btn-primary " style="float:right;"><i class="fa-solid fa-plus"></i>Add</a>
                            </div>
                        </div>
                        
                        <div class="row">
                           
                            <div class="col-md-12">
                                <table class="table table-stripped">
                                    <thead>
                                        <th>Roles</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($roles as $role)
                                        @csrf
                                        <tr>
                                            <td>{{$role->name}}</td>
                                            <td>
                                                <a href="{{route('roles.edit',$role->id)}}" class="btn btn-warning "><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{route('roles.delete',$role->id)}}" class="btn btn-danger m-3" ><i class="fa-solid fa-trash"></i></a>
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