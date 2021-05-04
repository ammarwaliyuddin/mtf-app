<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Home', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
