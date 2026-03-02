<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/book', 'book')->name('book');
Route::view('/prenota', 'book')->name('prenota');
