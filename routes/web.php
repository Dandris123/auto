<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\BalesetekController;
use App\Http\Controllers\TulajdonosController;


Route::get('/auto',[AutoController::class,"index"]);
Route::get('/auto-list',[AutoController::class,"list"]);
Route::post('/auto-save',[AutoController::class,"store"]);

Route::get('/baleset',[BalesetekController::class,"index"]);
Route::post('/baleset-save',[BalesetekController::class,"store"]);
Route::get('/auto-getdata/{id}',[AutoController::class,"getData"]);

Route::get('/tulajdonos',[TulajdonosController::class,"index"]);
Route::post('/tulajdonos-save',[TulajdonosController::class,"store"]);