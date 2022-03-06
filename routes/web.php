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
//    $is_fetched = false;
//    if($is_fetched){
        $settings = \App\site_setting::find(1);
        \Illuminate\Support\Facades\Session::put('site_setting',$settings);
//        dd(\Illuminate\Support\Facades\Session::get('site_setting'));
//        $is_fetched =true;
//    }
    return view('frontend.master');
});

Route::get('/admin/login', [\App\Http\Controllers\AdminController::class, 'login'])->name('admin.login');
Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'adminDashboard'])->name('admin.dashboard');
Route::post('/admin/submit', [\App\Http\Controllers\AdminController::class, 'submit'])->name('admin.submit');
Route::get('/admin/logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

//Relation
Route::get('/product', [\App\Http\Controllers\ControllerProduct::class, 'product'])->name('product');
Route::get('/category', [\App\Http\Controllers\ControllerProduct::class, 'category'])->name('category');

//site settings
//\Illuminate\Support\Facades\Route::get('/site_setting',[\App\Http\Controllers\ControllerProduct::class,'site'])->name('site.setting');

Route::get('/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category_view','ControllerProduct@categoryView')->name('category.view');

\Illuminate\Support\Facades\Route::get('/site_setting',[\App\Http\Controllers\SiteSettingController::class,'site'])->name('site.setting');
\Illuminate\Support\Facades\Route::post('/update_settings',[\App\Http\Controllers\SiteSettingController::class,'updateSetting'])->name('update.setting');



