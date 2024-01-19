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
    return ['Laravel' => app()->version()];
});

Route::get("/wel", function () {
    return view('welcome');
});

Route::post('/users', [userController::class, 'getData']);


Route::view("login", ['users']);// The first parameter is the route itself and teh
// the second parameter is the view (instead of calling 
// views with a function)
Route::view("home", ['home']);//route and view for the home page
Route::view("noaccess", ['noaccess']);
require __DIR__.'/auth.php';
