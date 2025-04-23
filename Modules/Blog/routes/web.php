<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\BlogController;

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::resource('blog', BlogController::class)->names('blog');
// });

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/dashboard', function () {
        return view('blog::dashboard');
    })->name('dashboard');

    // Other DMS routes here
});
