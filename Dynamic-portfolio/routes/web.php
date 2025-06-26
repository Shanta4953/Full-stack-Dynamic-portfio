<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Experience', function () {
    return view('Experience');
});

Route::get('/Services', function () {
    return view('Services');
});

Route::get('/Contact', function () {
    return view('Contact');
});


Route::get('/Projects', function () {
    return view('Projects');
});

Route::get('/Education', function () {
    return view('Education');
});