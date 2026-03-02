<?php

use App\Http\Controllers\LuogoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/luogo/{luogo}',[LuogoController::class, 'show'])->name('luogo.show');

Route::view('/book', 'book')->name('book');

Route::view('/prenota', 'book')->name('prenota');
