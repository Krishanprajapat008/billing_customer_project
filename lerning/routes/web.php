<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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


Route::post('billing',[userController::class,'adddata']);
Route::view('billing','billing');

Route::get('store',[userController::class,'show']);
//Route::view('store','store');

// Route::get('add',[userController::class,'show']);
// Route::view('add','store');

Route::get('add',[userController::class,'mydata']);





