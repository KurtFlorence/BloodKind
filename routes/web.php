<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('landing');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/donor', 'donor')->name('donor');
Route::view('/inventory', 'inventory')->name('inventory');
Route::view('/matching', 'matching')->name('matching');
Route::view('/user_view', 'user_view')->name('user_view');

Route::view('/login', 'login')->name('login'); 
Route::view('/signup', 'signup')->name('signup');
Route::view('/forgot', 'forgot')->name('forgot');
