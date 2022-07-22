<?php

use Illuminate\Support\Facades\Route;

//controller
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MusimController;

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
Route::post('user/update', [UsersController::class, 'update']);

//team
Route::get('team', [TeamController::class, 'index']);
Route::post('team/insert', [TeamController::class, 'insert']);
Route::get('team/delete/{id}', [TeamController::class, 'delete']);
Route::post('team/update', [TeamController::class, 'update']);

//musim
Route::get('musim', [MusimController::class, 'index']);
Route::post('musim/insert', [MusimController::class, 'insert']);
Route::get('musim/delete/{id}', [MusimController::class, 'delete']);
Route::post('musim/update', [MusimController::class, 'update']);