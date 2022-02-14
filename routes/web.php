<?php

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

Route::get('/', function () {
    return view('frontend.master');
});

Route::get( '/admin/login',[\App\Http\Controllers\AdminController::class,'login'])->name('admin.login');
Route::post( '/admin/login',[\App\Http\Controllers\AdminController::class,'submit'])->name('admin.submit');
