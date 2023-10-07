<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\VistaController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('ruta',[VistaController::class,'vista']);
Route::get('product/list',[ProductController::class,'index']);

