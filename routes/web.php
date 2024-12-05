<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReferenceController;
use League\CommonMark\Reference\Reference;

// Route::get('/', function () {
//     return 123;
// });

Route::get('/home/reference', [ReferenceController::class, 'show']);
Route::get('/home', [MainController::class, 'show']);