<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\PromotorCommunicationsController;
use App\Http\Controllers\TransactionsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/players', [PlayersController::class, 'index']);
Route::get('/players/{id}', [PlayersController::class, 'show']);
Route::post('/players', [PlayersController::class, 'store']);
Route::put('/players/{id}', [PlayersController::class, 'update']);
Route::delete('/players/{id}', [PlayersController::class, 'destroy']);

Route::get('/transactions', [TransactionsController::class, 'index']);
Route::get('/transactions/{id}', [TransactionsController::class, 'show']);
Route::post('/transactions', [TransactionsController::class, 'store']);
Route::put('/transactions/{id}', [TransactionsController::class, 'update']);
Route::delete('/transactions/{id}', [TransactionsController::class, 'destroy']);

Route::get('/communications', [PromotorCommunicationsController::class, 'index']);
Route::get('/communications/{id}', [PromotorCommunicationsController::class, 'show']);
