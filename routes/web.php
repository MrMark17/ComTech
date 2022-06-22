<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing;
use App\Http\Controllers\Auth;

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

Route::get('/', [Landing::class, 'index']);
Route::get('/login', [Auth::class, 'index']);
Route::get('/register', [Auth::class, 'register']);
Route::post('/actionLogin', [Auth::class, 'actionLogin']);
Route::post('/actionRegister', [Auth::class, 'actionRegister']);
