<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\LuogoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/luogo/{luogo}', [LuogoController::class, 'show'])->name('luogo.show');

Route::view('/book', 'book')->name('book');

Route::view('/prenota', 'book')->name('prenota');

Route::get('/availability', [BookingController::class, 'availability'])->name('availability');
