<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::apiResource('schools', 'App\Http\Controllers\Api\SchoolController')->parameters(['schools' => 'id'])->names('schools');
Route::apiResource('students', 'App\Http\Controllers\Api\StudentController')->parameters(['students' => 'id'])->names('students');