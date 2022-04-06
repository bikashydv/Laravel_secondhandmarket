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
    $data =[];
    \App\Helper::updateSiteSetting();
    $data['categories'] = \App\Helper::getCategories();
    $data['products'] = \App\Product::with('category','description')->paginate(20);
    return view('frontend.master', $data);
});

Route::get('/admin/login', [\App\Http\Controllers\AdminController::class, 'login'])->name('admin.login');
Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'adminDashboard'])->name('admin.dashboard');
Route::post('/admin/submit', [\App\Http\Controllers\AdminController::class, 'submit'])->name('admin.submit');
Route::get('/admin/logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

//Relation
Route::get('/product', [\App\Http\Controllers\ControllerProduct::class, 'product'])->name('product');
Route::get('/category', [\App\Http\Controllers\ControllerProduct::class, 'category'])->name('category');

// categories
Route::view('/create-category','backend.category')->name('category.create.view');
Route::get('/categoryedit/{id}', [\App\Http\Controllers\ControllerProduct::class, 'categoryedit'])->name('category.edit');
Route::get('/categorydelete/{id}', [\App\Http\Controllers\ControllerProduct::class, 'categorydelete'])->name('category.delete');
Route::post('/categorycreate', [\App\Http\Controllers\ControllerProduct::class, 'categorycreate'])->name('category.create');
Route::post('/categoryupdate/{id}', [\App\Http\Controllers\ControllerProduct::class, 'categoryupdate'])->name('category.update');

//products

Route::get('/product', [\App\Http\Controllers\ProductController::class, 'product'])->name('product');
Route::get('/product/create', [\App\Http\Controllers\ProductController::class, 'createProduct'])->name('product.create');
Route::post('/product/store', [\App\Http\Controllers\ProductController::class, 'productStore'])->name('product.store');
Route::get('/productedit/{id}', [\App\Http\Controllers\ProductController::class, 'productedit'])->name('product.edit');
Route::get('/productdelete/{id}', [\App\Http\Controllers\ProductController::class, 'productdelete'])->name('product.delete');
Route::post('/productupdate/{id}', [\App\Http\Controllers\ProductController::class, 'productupdate'])->name('product.update');


//site settings
//\Illuminate\Support\Facades\Route::get('/site_setting',[\App\Http\Controllers\ControllerProduct::class,'site'])->name('site.setting');
\Illuminate\Support\Facades\Route::get('/site_setting',[\App\Http\Controllers\SiteSettingController::class,'site'])->name('site.setting');
\Illuminate\Support\Facades\Route::post('/update_settings',[\App\Http\Controllers\SiteSettingController::class,'updateSetting'])->name('update.setting');


Route::get('/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category_view','ControllerProduct@categoryView')->name('category.view');


//Ajax Route
Route::post('/product/info', [\App\Http\Controllers\ProductController::class, 'getInfo'])->name('product.info');

//frontend recent  page
Route::get('/buy/{id}', [\App\Http\Controllers\ProductController::class, 'buyproduct'])->name('product.buy');


