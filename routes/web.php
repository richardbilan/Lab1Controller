<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Index', function () {
    return view('Index');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});


