<?php

use Illuminate\Support\Facades\Route;

//controller
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;

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

//login
Route::get('login', [LoginController::class, 'index']);
Route::post('login/auth', [LoginController::class, 'auth']);
Route::get('logout', [LoginController::class, 'logout']);

//dashboard
Route::get('dashboard', [DashboardController::class, 'index']);

//users
Route::get('user', [UsersController::class, 'index']);
Route::post('user/insert', [UsersController::class, 'insert']);
Route::get('user/delete/{id}', [UsersController::class, 'delete']);
Route::get('user/update/{id}', [UsersController::class, 'update']);
