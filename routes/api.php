<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

//posts
Route::apiResource('/items', App\Http\Controllers\Api\ItemController::class);
Route::apiResource('/customers', App\Http\Controllers\Api\CustomerController::class);