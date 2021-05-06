<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\AbsentController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
//reports
Route::get('/reports', [ReportsController::class, 'index']);
Route::get('/addreport', [ReportsController::class, 'addReport']);

//customers
Route::get('/customers', [CustomersController::class, 'index']);
Route::get('/addcustomer', [CustomersController::class, 'addCustomer']);
Route::get('/addproduct', [CustomersController::class, 'addProduct']);

Route::get('/absent', [AbsentController::class, 'index']);
