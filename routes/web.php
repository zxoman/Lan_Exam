<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\GetController;
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

Route::get('/',[GetController::class,"index"]);
Route::post('/',[GetController::class,"get"]);

Route::get('/add', [AddController::class,"index"]);
Route::post('/add', [AddController::class,"add"]);
Route::get('/create', [ExamController::class,"index"]);
Route::post('/create', [ExamController::class,"get"]);
Route::get('/edit', [EditController::class,"index"]);
Route::post('/edit', [EditController::class,"edit"]);
