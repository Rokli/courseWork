<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
// Route::get('/', function () {
//     return 123;
// });

Route::get('/home', [MainController::class, 'show']);