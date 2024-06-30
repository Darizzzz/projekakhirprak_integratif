<?php

use App\Http\Controllers\databaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;


Route::get('/', [ formController::class, 'index']);
//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
