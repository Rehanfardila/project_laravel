<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Route::get('/celanapanjang', [PageController::class, 'tampil']);

Route::get('/seprei', [PageController::class, 'seprei1']);

Route::get('/handuk', [PageController::class, 'handuk2']);


Route::get('/yamaha', [PageController::class, 'yamaha']);

Route::get('/honda', [PageController::class, 'honda']);

Route::get('/suzuki', [PageController::class, 'suzuki']);

Route::get('/beranda', [PageController::class, 'home']);

route::get('/arsenal', [PageController::class, 'arsenal1']);

route::get('/about', [PageController::class, 'about']);

route::get('/ktp', [PageController::class, 'data_ktp']);

route::get('/baju', [PageController::class, 'bajubaru']);

route::get('/hktp', [PageController::class, 'ktp1']);

route::get('/ps', [PageController::class, 'ps4']);

route::get('/login', [PageController::class, 'login1']);

Route::resource('/playstation', (UserController::class));
