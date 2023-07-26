<?php

use App\Http\Controllers\BanxicoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\EmpleadoController;
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

/* Login */
Route::get('/',[LoginController::class,'show'])->name('login');
Route::post('login',[LoginController::class,'login']);
Route::get('/alta',[RegistroController::class,'show']);
Route::post('/usuarioup',[RegistroController::class,'register']);
Route::get('/dollar-amount',[BanxicoController::class,'getDollarAmount']);

/* Idioma */
Route::get('/locale/{lang}',[LocaleController::class,'setLang']);

Route::group(['middleware' => ['auth']], function () {
  /* Logout */
  Route::get('/logout',[LoginController::class,'logout']);
  /* Panel */
  Route::get('/panel',[EmpleadoController::class,'index']);
  /* Empleados */
  Route::view('/nuevo', 'internas.nuevo');
  Route::post('/nuevoup',[EmpleadoController::class,'nuevoup']);
  Route::get('/estatus/{action}/{id}',[EmpleadoController::class,'estatus']);
  Route::get('/editar/{id}',[EmpleadoController::class,'editar']);
  Route::post('/editarup',[EmpleadoController::class,'editarup']);
  Route::get('/ver/{id}',[EmpleadoController::class,'ver']);
});