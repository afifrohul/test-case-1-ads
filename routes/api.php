<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/pegawai', [\App\Http\Controllers\Api\PegawaiController::class, 'index']);
    Route::get('/pegawai_top', [\App\Http\Controllers\Api\PegawaiController::class, 'top3pegawai']);
    Route::get('/pegawai_cuti', [\App\Http\Controllers\Api\PegawaiController::class, 'pegawai_cuti']);
    Route::get('/pegawai_sisa_cuti', [\App\Http\Controllers\Api\PegawaiController::class, 'pegawai_sisa_cuti']);
    Route::post('/pegawai/store', [\App\Http\Controllers\Api\PegawaiController::class, 'store']);
    Route::put('/pegawai/update/{pegawai}', [\App\Http\Controllers\Api\PegawaiController::class, 'update']);
    Route::delete('/pegawai/delete/{pegawai}', [\App\Http\Controllers\Api\PegawaiController::class, 'delete']);
});


Route::post('auth/register', \App\Http\Controllers\Api\Auth\RegisterController::class);
Route::post('auth/login', \App\Http\Controllers\Api\Auth\LoginController::class);
