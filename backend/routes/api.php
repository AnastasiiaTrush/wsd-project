<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EchoController;
use App\Http\Controllers\Api\TaskController;

Route::get('/echo', [EchoController::class, 'echo']);
Route::post('/echo', [EchoController::class, 'echo']);

Route::prefix('78719/v1')->group(function () {
    Route::apiResource('tasks', TaskController::class);
});