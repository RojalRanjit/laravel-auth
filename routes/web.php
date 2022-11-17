<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
//post to save the user
Route::post('/signupUser', [UserController::class, 'registerUser'])->name('signupUser');

Route::post('/loginUser', [UserController::class, 'loginUser'])->name('loginUser');
