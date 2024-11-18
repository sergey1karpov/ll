<?php

use App\Http\Controllers\NewsCategoriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [NewsCategoriesController::class, 'getCategories'])->name('getCategories');
