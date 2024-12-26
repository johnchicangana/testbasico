<?php

use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/schools', [SchoolController::class, 'index']);
Route::get('/schools/create', [SchoolController::class, 'create']);
Route::post('/schools', [SchoolController::class, 'store']);
Route::get('/schools/{id}', [SchoolController::class, 'show']);
Route::get('/schools/{id}/edit', [SchoolController::class, 'edit']);
Route::put('/schools/{id}', [SchoolController::class, 'update']);
Route::delete('/schools/{id}', [SchoolController::class, 'destroy']);