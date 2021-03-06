<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

Route::post('app/create_tag',[AdminController::class,'addTag']);
Route::get('app/get_tags',[AdminController::class,'getTag']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new',[TestController::class,'index']);

Route::any('{slug}',function(){
    return view('welcome');
});


