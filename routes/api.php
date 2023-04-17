<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\TextoController;
use App\Http\Controllers\api\TipoTextoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('textos')->group(function(){
    Route::get('search/{texto}', [TextoController::class, 'search']);
    Route::post('keyup', [TextoController::class, 'keyup']);
    Route::get('/', [TextoController::class, 'index']);
    Route::get('/{id}', [TextoController::class, 'show']);
});

Route::prefix('tipo-textos')->group(function(){
    Route::get('/', [TipoTextoController::class, 'index']);
    Route::get('/{id}', [TipoTextoController::class, 'show']);
});
