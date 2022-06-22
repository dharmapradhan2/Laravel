<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentCrudController;
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
Route::get('/',[StudentCrudController::class,'index']);
Route::get('/add',[StudentCrudController::class,'form']);
Route::post('/add',[StudentCrudController::class,'store']);