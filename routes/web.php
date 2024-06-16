<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/About', [AboutMeController::class,'index']);
Route::get('/Skills', [SkillsController::class,'index']);
Route::get('/Hobbies', [HobbiesController::class,'index']);

