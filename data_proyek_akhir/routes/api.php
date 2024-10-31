<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/projects', [ProjectController::class, 'index']);
Route::post('/projects', [ProjectController::class, 'store']);

Route::get('/projects/{project}', [ProjectController::class, 'show']);
Route::post('/projects/{project}/update', [ProjectController::class, 'update']);
