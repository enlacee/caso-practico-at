<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayersController;

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

Route::get('/players', [PlayersController::class, 'index'])->name('players.index');
Route::get('/players/{id}', [PlayersController::class, 'show'])->name('players.show');
Route::post('/players', [PlayersController::class, 'store'])->name('players.store');
Route::put('/players/{id}', [PlayersController::class, 'update'])->name('players.update');
Route::delete('/players/{id}', [PlayersController::class, 'destroy'])->name('players.destroy');
