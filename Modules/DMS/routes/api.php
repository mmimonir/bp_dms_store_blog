<?php

use Illuminate\Support\Facades\Route;
use Modules\DMS\Http\Controllers\DMSController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('dms', DMSController::class)->names('dms');
});
