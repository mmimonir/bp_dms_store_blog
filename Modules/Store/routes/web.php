<?php

use Illuminate\Support\Facades\Route;
use Modules\Store\Http\Controllers\StoreController;

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::resource('store', StoreController::class)->names('store');
// });

Route::prefix('store')->name('store.')->group(function () {
    Route::get('/dashboard', function () {
        return view('store::dashboard');
    })->name('dashboard');

    // Other DMS routes here
});
