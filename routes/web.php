<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
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

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::get('/students/{id}/edit', [StudentController::class, 'edit']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
// Route::resource('students', [StudentController::class]);