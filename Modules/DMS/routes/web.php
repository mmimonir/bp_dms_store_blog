<?php

use Illuminate\Support\Facades\Route;
use Modules\DMS\Http\Controllers\DMSController;

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::resource('dms', DMSController::class)->names('dms');
// });
Route::prefix('dms')->name('dms.')->group(function () {
    Route::get('/dashboard', function () {
        return view('dms::dashboard');
    })->name('dashboard');

    // Other DMS routes here
});
