<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\EmployeeController;
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

// Route::get("/", [UserController::class, "index"]);

Route::view('/new','addmembers');
// Route::post('/upload', 'UploadController@upload');
Route::post('/add', [memberController::class, 'addData']);

Route::get("/",[memberController::class, 'show']);
Route::get("delete/{id}", [memberController::class, 'delete']);

// THE ROUTES FOR THE JOIN SECTION OF THE COURSE
Route::get("show",[EmployeeController::class, "show"]);