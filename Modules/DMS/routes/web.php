<?php

use Illuminate\Support\Facades\Route;
use Modules\DMS\Http\Controllers\DMSController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('dms', DMSController::class)->names('dms');
});
