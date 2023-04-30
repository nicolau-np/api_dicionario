<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextoController;
use App\Http\Controllers\TipoTextoController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);


Route::prefix('user')->group(function(){
    Route::get('login', [UserController::class, 'login']);
    Route::post('login', [UserController::class, 'logar']);
    Route::get('logout', [UserController::class, 'logout']);
});

Route::prefix('textos')->group(function(){
    Route::get('create', [TextoController::class, 'create']);
    Route::post('/', [TextoController::class, 'store']);
    Route::get('edit/{id}', [TextoController::class, 'edit']);
    Route::put('/{id}', [TextoController::class, 'update']);
    Route::get('destroy/{id}', [TextoController::class, 'destroy']);
    Route::get('/', [TextoController::class, 'index']);
    Route::get('/{id}', [TextoController::class, 'show']);
});

Route::prefix('tipo-textos')->group(function(){
    Route::get('create', [TipoTextoController::class, 'create']);
    Route::post('/', [TipoTextoController::class, 'store']);
    Route::get('edit/{id}', [TipoTextoController::class, 'edit']);
    Route::put('/{id}', [TipoTextoController::class, 'update']);
    Route::get('destroy/{id}', [TipoTextoController::class, 'destroy']);
    Route::get('/', [TipoTextoController::class, 'index']);
    Route::get('/{id}', [TipoTextoController::class, 'show']);
});

