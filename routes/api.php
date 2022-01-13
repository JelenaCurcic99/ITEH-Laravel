<?php

use App\Http\Controllers\KurirController;
use App\Http\Controllers\PrimalacController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('kurir', [KurirController::class, 'index']);
Route::get('kurir/{kurir}', [KurirController::class, 'show']);
Route::put('kurir/{kurir}', [KurirController::class, 'update']);
Route::delete('kurir/{kurir}', [KurirController::class, 'destroy']);

Route::get('primalac', [PrimalacController::class, 'index']);
Route::delete('primalac/{primalac}', [PrimalacController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
