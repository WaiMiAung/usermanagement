<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/home',[UserController::class,'index']);

Route::get('/role',[RoleController::class,'index'])->name('roles.index');

Route::get('/home',[UserController::class,'index'])->name('users.index');

Route::get('/home/user/create',[UserController::class,'create'])->name('users.create');

Route::get('/user/store',[UserController::class,'store'])->name('users.store');

Route::get('/home/user/edit/{id}',[UserController::class,'edit'])->name('users.edit');

Route::get('/user/update/{id}',[UserController::class,'update'])->name('users.update');

Route::get('/user/delete/{id}',[UserController::class,'destroy'])->name('users.delete');

Route::get('/user/excel',[UserController::class,'printexcel'])->name('users.excel');

Route::get('/user/pdf',[UserController::class,'exportpdf'])->name('users.pdf');

Route::get('/user/print',[UserController::class,'printview'])->name('users.print');

Route::get('/role/create',[RoleController::class,'create'])->name('roles.create');

Route::get('/role/edit/{id}',[RoleController::class,'edit'])->name('roles.edit');

Route::get('/role/update/{id}',[RoleController::class,'update'])->name('roles.update');

Route::get('/role/store',[RoleController::class,'store'])->name('role.store');

Route::get('/role/delete/{id}',[RoleController::class,'destroy'])->name('roles.delete');

