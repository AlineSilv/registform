<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index.home');
})->name('index.home');
Route::get('/register', function () {
    return view('welcome');
})->name('index.admin');