<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

\Illuminate\Support\Facades\Route::get('/products',[\App\Http\Controllers\ApiController::class,'getProducts'])->name('api.product');
\Illuminate\Support\Facades\Route::get('/category',[\App\Http\Controllers\ApiController::class,'getCategory'])->name('api.category');
\Illuminate\Support\Facades\Route::post('/login',[\App\Http\Controllers\ApiController::class,'login'])->name('api.login');
