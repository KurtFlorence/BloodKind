<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('landing');
Route::view('/dashboard', 'dashboard');
Route::view('/donor', 'donor');
Route::view('/inventory', 'inventory');
Route::view('/matching', 'matching');

Route::view('/login', 'login')->name('login'); 
Route::view('/signup', 'signup')->name('signup');
Route::view('/forgot', 'forgot')->name('forgot');
