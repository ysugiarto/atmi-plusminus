<?php

use Illuminate\Support\Facades\Route;
use Modules\UserProfile\Http\Controllers\UserProfileController;


// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::resource('userprofile', UserProfileController::class)->names('userprofile');
// });

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('userprofile', UserProfileController::class)->names('userprofile');
});
