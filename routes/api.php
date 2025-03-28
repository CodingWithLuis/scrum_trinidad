<?php

use App\Http\Controllers\Api\CustomerApiController;
use App\Http\Controllers\Api\RoleApiController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/users/getUsersData', [UserController::class, 'getUsersData']);
Route::apiResource('roles', RoleApiController::class)->only('index');

Route::apiResource('customers', CustomerApiController::class)->only('index');
