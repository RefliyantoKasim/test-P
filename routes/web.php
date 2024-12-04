<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::get('/register', function () {
    return view('pages.auth.auth-register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard', ['type_menu' => 'home']);
    })->name('home');


    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('order', OrderController::class);
});
