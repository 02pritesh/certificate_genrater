<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\login\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LoginController::class,'login']);
Route::post('login',[LoginController::class,'loginUser']);
Route::get('logout',[LoginController::class,'logout']);

Route::get('home',[AdminController::class,'certificate']);
Route::post('post_data',[AdminController::class,'certiPost']);

Route::get('userlist',[StudentController::class,'userList']);
Route::get('certificates/{id}',[StudentController::class,'userCertificate']);
Route::get('userlist/edit/{id}',[StudentController::class,'user_edit']);
Route::post('user_edit',[StudentController::class,'update']);
Route::get('userlist/delete/{id}',[StudentController::class,'delete']);