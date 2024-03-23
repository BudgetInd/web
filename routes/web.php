<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));
Route::get('/home', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/contact', fn () => view('contact'));
