<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', function () {
    return redirect('/');
});

Route::get('/chd', function () {
    return redirect('/');
});

// Route::get('/', function () {
//     return redirect('/chd');
// });
Route::get('/', [LandingPageController::class, 'maintenace']);
Route::get('/chd', [LandingPageController::class, 'index']);

