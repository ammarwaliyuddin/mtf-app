<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportsController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Home', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
//reports
Route::get('/reports', [ReportsController::class, 'index']);
Route::get('/addreport', [ReportsController::class, 'addReport']);
