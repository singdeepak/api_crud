<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/create', [UserController::class, 'create']);
Route::post('/update', [UserController::class, 'update']);
Route::post('/delete', [UserController::class, 'delete']);
