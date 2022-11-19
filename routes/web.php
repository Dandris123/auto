<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\BalesetController;
use App\Http\Controllers\TulajController;


Route::get('/auto',[AutoController::class,"index"]);

Route::get('/baleset',[BalesetekController::class,"index"]);

Route::get('/tulajdonos',[TulajdonosController::class,"index"]);