<?php

use App\Http\Controllers\Api\AprendizController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('aprendiz', AprendizController::class);
});