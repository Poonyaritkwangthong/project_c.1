<?php

use App\Http\Controllers\BrandAPIController;
use App\Http\Controllers\CarAPIController;
use App\Http\Controllers\EngineAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::resource('/brand', BrandAPIController::class);
Route::get('/brand/search/{name}', [BrandAPIController::class,'search']);

Route::resource('/engine', EngineAPIController::class);
Route::get('/engine/search/{name}', [EngineAPIController::class,'search']);

Route::resource('/car', CarAPIController::class);
Route::get('/car/search/{name}', [CarAPIController::class,'search']);
