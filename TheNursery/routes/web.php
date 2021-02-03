<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NurseryController;

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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/',[NurseryController::class,'home']);
Route::get('/about',[NurseryController::class,'about']);
Route::get('/contact',[NurseryController::class,'contact']);

Route::get('/class',[NurseryController::class,'class']);

Route::post('/gallery',[NurseryController::class,'InsertData']);
Route::get('/gallery',[NurseryController::class,'gallery']);