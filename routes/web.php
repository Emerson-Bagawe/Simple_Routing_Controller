<?php

use Illuminate\Support\Facades\Route;

Route::get('/About', function() {
    return view('About_Me');
});

Route::get('/Skills', function() {
    return view('Skills');
});

Route::get('/Hobbies', function() {
    return view('Hobbies');
});

Route::get('/', function () {
    return view('welcome');
});