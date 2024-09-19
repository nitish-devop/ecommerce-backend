<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('categories', CategoryController::class);