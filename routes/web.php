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

Route::get('/admin/login', [\App\Http\Controllers\AdminController::class, 'login'])->name('admin.login');
Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'adminDashboard'])->name('admin.dashboard');
Route::post('/admin/submit', [\App\Http\Controllers\AdminController::class, 'submit'])->name('admin.submit');
Route::get('/admin/logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

//Relation
Route::get('/product', [\App\Http\Controllers\ControllerProduct::class, 'product'])->name('product');
Route::get('/category', [\App\Http\Controllers\ControllerProduct::class, 'category'])->name('category');
\Illuminate\Support\Facades\Route::get('/site_setting',[\App\Http\Controllers\ControllerProduct::class,'site'])->name('site.setting');

Route::get('/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//site settings

