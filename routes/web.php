<?php

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\ProductController;

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
    return view('welcome');
});

//Route::get("/admin/products",'ProductController@products');

Route::get('hello',function (){
    return 'hello laravel!';
});

Route::get('home/user/{user}',[HomeController::class,'user']);
