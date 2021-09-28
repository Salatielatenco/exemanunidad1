<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstalacionController;
use App\Http\Controllers\VistasController;
use App\Http\Controllers\VistasbladeController;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\ControladoresController;
use App\Http\Controllers\SabiasqueController;

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

Route::get('/', HomeController::class);
Route::get('/instalacion',[InstalacionController::class,'instalacion']);
Route::get('/vistas',[VistasController::class,'vistas']);
Route::get('/vistasblade',[VistasbladeController::class,'vistasblade']);
Route::get('/rutas',[RutasController::class,'rutas']);
Route::get('/controladores',[ControladoresController::class,'controladores']);
Route::get('/sabiasque',[SabiasqueController::class,'sabiasque']);

