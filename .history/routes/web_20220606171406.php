<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::get('/todo/create', [TodoController::class, 'index']);
Route::get('/todo/update', [TodoController::class, 'index']);
Route::get('/', [TodoController::class, 'index']);