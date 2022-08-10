<?php

use Illuminate\Support\Facades\Route;

//controller
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MusimController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\KlasemenController;
use App\Http\Controllers\LandingController;
 
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

//landing page
Route::get('/', [LandingController::class, 'index']);
Route::match(array('GET','POST'),'landing/jadwal', [LandingController::class, 'jadwal']);
Route::match(array('GET','POST'),'landing/hasil', [LandingController::class, 'hasil']);
Route::match(array('GET','POST'),'landing/klasemen', [LandingController::class, 'klasemen']);
Route::match(array('GET','POST'),'landing/histori', [LandingController::class, 'histori']);
Route::match(array('GET','POST'),'landing/histori_view/{id}', [LandingController::class, 'histori_view']);

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
Route::get('musim/switch/{id}', [MusimController::class, 'switch']);

//jadwal
Route::match(array('GET','POST'),'jadwal', [JadwalController::class, 'index']);
Route::post('jadwal/insert', [JadwalController::class, 'insert']);
Route::get('jadwal/delete/{id}', [JadwalController::class, 'delete']);
Route::post('jadwal/update', [JadwalController::class, 'update']);
Route::post('jadwal/skor', [JadwalController::class, 'skor']);

//hasil
Route::match(array('GET','POST'),'hasil', [HasilController::class, 'index']);

//klasemen
Route::match(array('GET','POST'),'klasemen', [KlasemenController::class, 'index']);