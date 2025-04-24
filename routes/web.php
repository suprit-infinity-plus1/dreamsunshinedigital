<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.home.index');
// });
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/single-product', [MainController::class, 'singleProduct'])->name('singleProduct');
