<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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

Route::view('/', 'login.login')->name('login')->middleware('guest');
Route::view('panel', 'internas.panel')->middleware('auth');

Route::post('login',[LoginController::class,'login']);

Route::get('logout',[LoginController::class,'logout']);

Route::get('locale/{lang}',[LocaleController::class,'setLang']);

Route::view('nuevo', 'internas.nuevo');

Route::post('nuevoup',[EmpleadoController::class,'nuevo'])->name('nuevoup');