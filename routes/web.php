<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\LoginPageController;
use App\Http\Controllers\DataLoginsController;
use App\Http\Controllers\FormController;

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
//Route::get('/LoginAccount/{id}',[RouteController::class,'Log_in']);
Route::get('/login',[LoginPageController::class,'Login']);
Route::get('/box',[LoginPageController::class,'box']);
Route::get('/resultado', DataLoginsController::class);
Route::get('/Fomulario',[FormController::class,'Fomulario']);



