<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextoController;
use App\Http\Controllers\TipoTextoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/optimize', function () {
    $cleardebugbar = Artisan::call('optimize');
    echo "Optimize cleared<br>";
});

Route::get('/migrate', function(){
    $migrate = Artisan::call('migrate:fresh');
    echo "migrate<br>";

    $seeder = Artisan::call('db:seed');
    echo "Seed<br>";

});

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::prefix('user')->group(function(){
    Route::get('login', [UserController::class, 'login'])->name('login')->middleware('guest');
    Route::post('login', [UserController::class, 'logar'])->middleware('guest');
    Route::get('logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
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

