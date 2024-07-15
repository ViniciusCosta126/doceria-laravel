<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\CategoriaController;
use App\Http\Controllers\api\DoceController;
use App\Http\Controllers\api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/registro', RegisterController::class);
Route::post('/login', [AuthController::class, "login"]);

Route::apiResource('/categorias', CategoriaController::class);
Route::apiResource('/doces', DoceController::class);


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/categorias', CategoriaController::class)->only(['store', 'update', 'destroy']);
    Route::apiResource('/doces', DoceController::class)->only(['store', 'update', 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
