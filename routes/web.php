<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', function () {
    return redirect('/chd');
});
Route::get('/chd', [LandingPageController::class, 'index']);
